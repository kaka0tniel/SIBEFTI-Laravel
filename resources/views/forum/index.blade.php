@extends('forum')
@section('content')
        <div id="app">
            <div id="chatter" class="chatter_home">
                <div id="chatter_hero">
                    <div id="chatter_hero_dimmer"></div>
                    <h1>Selamat Datang di Forum Mahasiswa</h1>
                    <p>Diam bukan pilihan. Sampaikan semuanya di sini!</p>
                </div>
                <div class="container chatter_container">
                    <div class="row">
                        <div class="col-md-3 left-column">
                            <!-- SIDEBAR -->
                            <div class="chatter_sidebar">
                                <button class="btn btn-primary" id="new_discussion_btn"><i class="chatter-new"></i> New Discussion</button>
                                <a href="/forums"><i class="chatter-bubble"></i> All Discussion</a>
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="/forums/category/introductions"><div class="chatter-box" style="background-color:#3498DB"></div> Lost and Found</a></li>
                                    <li><a href="/forums/category/general"><div class="chatter-box" style="background-color:#2ECC71"></div> Pelajaran</a></li>
                                    <li><a href="/forums/category/feedback"><div class="chatter-box" style="background-color:#9B59B6"></div> Info Sayembara</a></li>
                                    <li><a href="/forums/category/random"><div class="chatter-box" style="background-color:#E67E22"></div> Info Lowongan Magang/Pekerjaan</a></li>
                                </ul>
                            </div>
                            <!-- END SIDEBAR -->
                        </div>
                        <div class="col-md-9 right-column">
                            <div class="panel">
                                <ul class="discussions">
                                    <li>
                                        <a class="discussion_list" href="/forums/discussion/random/lagi-dan-lagi">
                                            <div class="chatter_avatar">

                                                <span class="chatter_avatar_circle" style="background-color:#a88285">
                                                    O
                                                </span>

                                            </div>

                                            <div class="chatter_middle">
                                                <h3 class="chatter_middle_title">lagi dan lagi <div class="chatter_cat" style="background-color:#E67E22">Info Lowongan Magang/Pekerjaan</div></h3>
                                                <span class="chatter_middle_details">Posted By: <span data-href="/user">Otniel</span> 1 minute ago</span>
                                                <p>ajsdhashdlasdlsadnsaldnsa&nbsp;</p>
                                            </div>

                                            <div class="chatter_right">

                                                <div class="chatter_count"><i class="chatter-bubble"></i> 0</div>
                                            </div>

                                            <div class="chatter_clear"></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="discussion_list" href="/forums/discussion/general/test-lagi">
                                            <div class="chatter_avatar">

                                                <span class="chatter_avatar_circle" style="background-color:#a88285">
                                                    O
                                                </span>

                                            </div>

                                            <div class="chatter_middle">
                                                <h3 class="chatter_middle_title">test lagi <div class="chatter_cat" style="background-color:#2ECC71">Pelajaran</div></h3>
                                                <span class="chatter_middle_details">Posted By: <span data-href="/user">Otniel</span> 3 minutes ago</span>
                                                <p>tes tes tes tes</p>
                                            </div>

                                            <div class="chatter_right">

                                                <div class="chatter_count"><i class="chatter-bubble"></i> 1</div>
                                            </div>

                                            <div class="chatter_clear"></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="discussion_list" href="/forums/discussion/introductions/testtttttttt">
                                            <div class="chatter_avatar">

                                                <span class="chatter_avatar_circle" style="background-color:#a88285">
                                                    O
                                                </span>

                                            </div>

                                            <div class="chatter_middle">
                                                <h3 class="chatter_middle_title">testtttttttt <div class="chatter_cat" style="background-color:#3498DB">Lost and Found</div></h3>
                                                <span class="chatter_middle_details">Posted By: <span data-href="/user">Otniel</span> 9 minutes ago</span>
                                                <p>dakjsbdkjasbdasbdksabdsa</p>
                                            </div>

                                            <div class="chatter_right">

                                                <div class="chatter_count"><i class="chatter-bubble"></i> 1</div>
                                            </div>

                                            <div class="chatter_clear"></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="discussion_list" href="/forums/discussion/general/welcome-to-the-chatter-laravel-forum-package">
                                            <div class="chatter_avatar">

                                                <span class="chatter_avatar_circle" style="background-color:#5da5dd">
                                                    T
                                                </span>

                                            </div>

                                            <div class="chatter_middle">
                                                <h3 class="chatter_middle_title">Welcome to the Chatter Laravel Forum Package <div class="chatter_cat" style="background-color:#2ECC71">Pelajaran</div></h3>
                                                <span class="chatter_middle_details">Posted By: <span data-href="/user">Tony Lea</span> 8 months ago</span>
                                                <p>Hey There!
                                                    My name is Tony and I&#039;m the creator of this package that you&#039;ve just installed. Thanks for checking out it out and if you have any questions or want to contribute be sure to checkou...</p>
                                            </div>

                                            <div class="chatter_right">

                                                <div class="chatter_count"><i class="chatter-bubble"></i> 1</div>
                                            </div>

                                            <div class="chatter_clear"></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="discussion_list" href="/forums/discussion/random/just-a-random-post">
                                            <div class="chatter_avatar">

                                                <span class="chatter_avatar_circle" style="background-color:#5da5dd">
                                                    T
                                                </span>

                                            </div>

                                            <div class="chatter_middle">
                                                <h3 class="chatter_middle_title">Just a random post <div class="chatter_cat" style="background-color:#E67E22">Info Lowongan Magang/Pekerjaan</div></h3>
                                                <span class="chatter_middle_details">Posted By: <span data-href="/user">Tony Lea</span> 8 months ago</span>
                                                <p>This is just a random post to show you some of the formatting that you can do in the WYSIWYG editor. You can make your text bold, italic, or underlined.
                                                    Additionally, you can center align text...</p>
                                            </div>

                                            <div class="chatter_right">

                                                <div class="chatter_count"><i class="chatter-bubble"></i> 1</div>
                                            </div>

                                            <div class="chatter_clear"></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="discussion_list" href="/forums/discussion/feedback/leaving-feedback">
                                            <div class="chatter_avatar">

                                                <span class="chatter_avatar_circle" style="background-color:#5da5dd">
                                                    T
                                                </span>

                                            </div>

                                            <div class="chatter_middle">
                                                <h3 class="chatter_middle_title">Leaving Feedback <div class="chatter_cat" style="background-color:#9B59B6">Info Sayembara</div></h3>
                                                <span class="chatter_middle_details">Posted By: <span data-href="/user">Tony Lea</span> 8 months ago</span>
                                                <p>If you would like to leave some feedback or have any issues be sure to visit the github page here: https://github.com/thedevdojo/chatter&nbsp;and I&#039;m sure I can help out.
                                                    Let&#039;s make this packa...</p>
                                            </div>

                                            <div class="chatter_right">

                                                <div class="chatter_count"><i class="chatter-bubble"></i> 0</div>
                                            </div>

                                            <div class="chatter_clear"></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="discussion_list" href="/forums/discussion/general/login-information-for-chatter">
                                            <div class="chatter_avatar">

                                                <span class="chatter_avatar_circle" style="background-color:#5da5dd">
                                                    T
                                                </span>

                                            </div>

                                            <div class="chatter_middle">
                                                <h3 class="chatter_middle_title">Login Information for Chatter <div class="chatter_cat" style="background-color:#2ECC71">Pelajaran</div></h3>
                                                <span class="chatter_middle_details">Posted By: <span data-href="/user">Tony Lea</span> 8 months ago</span>
                                                <p>Hey!
                                                    Thanks again for checking out chatter. If you want to login with the default user you can login with the following credentials:
                                                    email address: tony@hello.com
                                                    password: pas...</p>
                                            </div>

                                            <div class="chatter_right">

                                                <div class="chatter_count"><i class="chatter-bubble"></i> 0</div>
                                            </div>

                                            <div class="chatter_clear"></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="discussion_list" href="/forums/discussion/introductions/hello-everyone-this-is-my-introduction">
                                            <div class="chatter_avatar">

                                                <span class="chatter_avatar_circle" style="background-color:#5da5dd">
                                                    T
                                                </span>

                                            </div>

                                            <div class="chatter_middle">
                                                <h3 class="chatter_middle_title">Hello Everyone, This is my Introduction <div class="chatter_cat" style="background-color:#3498DB">Lost and Found</div></h3>
                                                <span class="chatter_middle_details">Posted By: <span data-href="/user">Tony Lea</span> 8 months ago</span>
                                                <p>My name is Tony and I&#039;m a developer at https://devdojo.com and I also work with an awesome company in PB called The Control Group: http://www.thecontrolgroup.com
                                                    You can check me out on twitte...</p>
                                            </div>

                                            <div class="chatter_right">

                                                <div class="chatter_count"><i class="chatter-bubble"></i> 1</div>
                                            </div>

                                            <div class="chatter_clear"></div>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div id="pagination">

                            </div>

                        </div>
                    </div>
                </div>

                <div id="new_discussion">


                    <div class="chatter_loader dark" id="new_discussion_loader">
                        <div></div>
                    </div>

                    <form id="chatter_form_editor" action="/forums/discussion" method="POST">
                        <div class="row">
                            <div class="col-md-7">
                                <!-- TITLE -->
                                <input type="text" class="form-control" id="title" name="title" placeholder="Title of Discussion" v-model="title" value="" >
                            </div>

                            <div class="col-md-4">
                                <!-- CATEGORY -->
                                <select id="chatter_category_id" class="form-control" name="chatter_category_id">
                                    <option value="">Select a Category</option>
                                    <option value="1">Lost and Found</option>
                                    <option value="2">Pelajaran</option>
                                    <option value="3">Info Sayembara</option>
                                    <option value="4">Info Lowongan Magang/Pekerjaan</option>
                                </select>
                            </div>

                            <div class="col-md-1">
                                <i class="chatter-close"></i>
                            </div>
                        </div><!-- .row -->

                        <!-- BODY -->
                        <div id="editor">
                            <label id="tinymce_placeholder">Add the content for your Discussion here</label>
                            <textarea id="body" class="richText" name="body" placeholder=""></textarea>
                        </div>

                        <input type="hidden" name="_token" value="d0lscCbBKdw7XYjcYIWqvTCnEe7qI0IODo8P6ltT">

                        <div id="new_discussion_footer">
                            <input type='text' id="color" name="color" /><span class="select_color_text">Select a Color for this Discussion (optional)</span>
                            <button id="submit_discussion" class="btn btn-success pull-right"><i class="chatter-new"></i> Create Discussion</button>
                            <a href="/forums" class="btn btn-default pull-right" id="cancel_discussion">Cancel</a>
                            <div style="clear:both"></div>
                        </div>
                    </form>

                </div><!-- #new_discussion -->

            </div>

            <input type="hidden" id="chatter_tinymce_toolbar" value="bold italic underline | alignleft aligncenter alignright | bullist numlist outdent indent | link image">
            <input type="hidden" id="chatter_tinymce_plugins" value="link, image">

        </div>

        <!-- Scripts -->
        <script src="http://localhost:8000/js/app.js"></script>



        <script src="{{asset('chatter/vendor/tinymce/tinymce.min.js')}}"></script>
        <script src="{{asset('chatter/js/tinymce.js')}}"></script>
        <script src="{{asset('chatter/vendor/spectrum/spectrum.js')}}"></script>
        <script src="{{asset('chatter/js/chatter.js')}} "></script>
        <script>
                                                        var my_tinymce = tinyMCE;
                                                        $('document').ready(function () {

                                                            $('#tinymce_placeholder').click(function () {
                                                                my_tinymce.activeEditor.focus();
                                                            });
                                                            $('.chatter-close').click(function () {
                                                                $('#new_discussion').slideUp();
                                                            });
                                                            $('#new_discussion_btn, #cancel_discussion').click(function () {
                                                                $('#new_discussion').slideDown();
                                                                $('#title').focus();
                                                            });

                                                            $("#color").spectrum({
                                                                color: "#333639",
                                                                preferredFormat: "hex",
                                                                containerClassName: 'chatter-color-picker',
                                                                cancelText: '',
                                                                chooseText: 'close',
                                                                move: function (color) {
                                                                    $("#color").val(color.toHexString());
                                                                }
                                                            });



                                                        });
        </script>
@endsection
