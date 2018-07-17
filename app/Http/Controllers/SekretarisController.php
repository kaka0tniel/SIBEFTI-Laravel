<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\Pengumuman;
use App\Event;
use Illuminate\Support\Facades\Auth;
class SekretarisController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
    $this->middleware('rule:Sekretaris');
  }

    public function index()
  {
      $pengumumans = DB::table('pengumumans')->paginate(10);

      return view('sekretaris.index')->with('pengumumans', $pengumumans);
  }

  public function indexEvent(){
        $this->data['title'] = 'Daftar Pengumuman';
        $events = DB::table('events')->paginate(10);

        return view('sekretaris.event.index')->with('events', $events);

    }

    public function editpengumuman($id){
        $this->data['pengumumans'] = Pengumuman::find($id);
        return view('sekretaris.dataPengumuman.edit',$this->data);
    }

    public function editEvent($id){
        $this->data['events'] = Event::find($id);
        return view('sekretaris.event.edit',$this->data);
    }

    public function updatepengumuman(Request $request, $id){
      $input = $request->all();
      Pengumuman::find($id)->update($input);
      return redirect(url('sekretaris'))->with('info','Pengumuman berhasil diubah');
    }

    public function updateEvent(Request $request, $id){
      $input = $request->all();
      Event::find($id)->update($input);
      return redirect(url('sekretaris/event'))->with('info','Event berhasil diubah');
    }

    public function detail($ids)
    {
        $this->data['pengumumans'] = Pengumuman::find($ids);
        return view('sekretaris/dataPengumuman/detail',$this->data);
    }

    public function detailEvent($ids)
    {
        $this->data['events'] = Event::find($ids);
        return view('sekretaris/event/detailEvent',$this->data);
    }

    public function store(Request $request)
      {
          $input = $request->all();

          Pengumuman::create($input);
          return redirect(url('sekretaris'))->with('info','Pengumuman berhasil ditambahkan');
      }

      public function storeEvent(Request $request)
      {
          $input = $request->all();

          Event::create($input);
          return redirect(url('sekretaris'))->with('info','Pengumuman berhasil ditambahkan');
      }

      public function create()
      {
          $this->data['title'] = 'Tambah Pengumuman';
          return view('sekretaris.pengumuman.index',$this->data);
      }

      public function createEvent()
      {
          $this->data['title'] = 'Tambah Event';
          return view('sekretaris.event.create',$this->data);
      }

      public function delete($id){
        Pengumuman::find($id)->delete();
        return redirect(url('/sekretaris'))->with('info','Pengumuman berhasil dihapus');
      }

      public function deleteEvent($id){
        Event::find($id)->delete();
        return redirect(url('/sekretaris/event'))->with('info','Event berhasil dihapus');
      }

}
