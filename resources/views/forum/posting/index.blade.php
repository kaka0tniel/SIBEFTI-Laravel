<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="uDP1Tk70PY8vaaGHdqCBCVIgAMipy5ZkhH5eCKQp">

    <title>Laravel</title>

    <!-- Styles -->
    <link href="http://localhost:8000/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {"csrfToken":"uDP1Tk70PY8vaaGHdqCBCVIgAMipy5ZkhH5eCKQp"};
    </script>
    	<link href="{{asset('chatter/css/chatter.css')}}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="http://localhost:8000">
                        Laravel
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                                                    <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    otniel <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="logout">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="logout" method="POST" style="display: none;">
                                            <input type="hidden" name="_token" value="uDP1Tk70PY8vaaGHdqCBCVIgAMipy5ZkhH5eCKQp">
                                        </form>
                                    </li>
                                </ul>
                            </li>
                                            </ul>
                </div>
            </div>
        </nav>


<div id="chatter" class="discussion">

	<div id="chatter_header" style="background-color:#456c94">
		<div class="container">
			<a class="back_btn" href="/forums"><i class="chatter-back"></i></a>
			<h1>lagi dan lagi</h1><span class="chatter_head_details">Posted In Category<a class="chatter_cat" href="/forums/category/random" style="background-color:#E67E22">Random</a></span>
		</div>
	</div>




	<div class="container margin-top">

	    <div class="row">

	        <div class="col-md-12">

				<div class="conversation">
	                <ul class="discussions no-bg" style="display:block;">
	                		                		<li data-id="16">
		                		<span class="chatter_posts">
		                					                				<div id="delete_warning_16" class="chatter_warning_delete">
		                					<i class="chatter-warning"></i>Are you sure you want to delete this response?
		                					<button class="btn btn-sm btn-danger pull-right delete_response">Yes Delete It</button>
		                					<button class="btn btn-sm btn-default pull-right">No Thanks</button>
		                				</div>
			                			<div class="chatter_post_actions">
			                				<p class="chatter_delete_btn">
			                					<i class="chatter-delete"></i> Delete
			                				</p>
			                				<p class="chatter_edit_btn">
			                					<i class="chatter-edit"></i> Edit
			                				</p>
			                			</div>
			                					                		<div class="chatter_avatar">
					        								        				<span class="chatter_avatar_circle" style="background-color:#a88285">
					        					O
					        				</span>
					        								        		</div>

					        		<div class="chatter_middle">
					        			<span class="chatter_middle_details"><a href="#_">Otniel</a> <span class="ago chatter_middle_details">50 minutes ago</span></span>
					        			<div class="chatter_body"><p>ajsdhashdlasdlsadnsaldnsa&nbsp;</p></div>
					        		</div>

					        		<div class="chatter_clear"></div>
				        		</span>
		                	</li>


	                </ul>
	            </div>


	            	<div id="new_response">

	            		<div class="chatter_avatar">
		        					        				<span class="chatter_avatar_circle" style="background-color:#a88285">
		        					O
		        				</span>
		        					        		</div>

			            <div id="new_discussion">


					    	<div class="chatter_loader dark" id="new_discussion_loader">
							    <div></div>
							</div>

				            <form id="chatter_form_editor" action="/forums/posts" method="POST">

						        <!-- BODY -->
						    	<div id="editor">
									<label id="tinymce_placeholder">Add the content for your Discussion here</label>
									<textarea id="body" class="richText" name="body" placeholder=""></textarea>
								</div>

						        <input type="hidden" name="_token" value="uDP1Tk70PY8vaaGHdqCBCVIgAMipy5ZkhH5eCKQp">
						        <input type="hidden" name="chatter_discussion_id" value="12">
						    </form>

						</div><!-- #new_discussion -->

						<button id="submit_response" class="btn btn-success pull-right"><i class="chatter-new"></i> Submit Response</button>
					</div>


	        </div>


	    </div>
	</div>

</div>

<input type="hidden" id="chatter_tinymce_toolbar" value="bold italic underline | alignleft aligncenter alignright | bullist numlist outdent indent | link image">
<input type="hidden" id="chatter_tinymce_plugins" value="link, image">

    </div>

    <!-- Scripts -->
    <script src="http://localhost:8000/js/app.js"></script>
    <script src="{{asset('chattervendor/tinymce/tinymce.min.js')}}"></script>
<script src="{{asset('chatter/js/tinymce.js')}}"></script>
<script>
	var my_tinymce = tinyMCE;
	$('document').ready(function(){

		$('#submit_response').click(function(){
			$('#chatter_form_editor').submit();
		});

		$('#tinymce_placeholder').click(function(){
			my_tinymce.activeEditor.focus();
		});

	});
</script>

<script>



	$('document').ready(function(){
		$('.chatter_edit_btn').click(function(){
			parent = $(this).parents('li');
			parent.addClass('editing');
			id = parent.data('id');
			container = parent.find('.chatter_middle');
			body = container.find('.chatter_body');
			details = container.find('.chatter_middle_details');

			// dynamically create a new text area
			container.prepend('<textarea id="post-edit-' + id + '">' + body.html() + '</textarea>');
			container.append('<div class="chatter_update_actions"><button class="btn btn-success pull-right update_chatter_edit"  data-id="' + id + '"><i class="chatter-check"></i> Update Response</button><button href="/" class="btn btn-default pull-right cancel_chatter_edit" data-id="' + id + '">Cancel</button></div>');

			initializeNewEditor('post-edit-' + id);

		});

		$('.discussions li').on('click', '.cancel_chatter_edit', function(e){
			post_id = $(e.target).data('id');
			parent_li = $(e.target).parents('li');
			parent_actions = $(e.target).parent('.chatter_update_actions');
			tinymce.remove('#post-edit-' + post_id);
			$('#post-edit-' + post_id).remove();
			parent_actions.remove();

			parent_li.removeClass('editing');
		});

		$('.discussions li').on('click', '.update_chatter_edit', function(e){
			post_id = $(e.target).data('id');
			update_body = tinyMCE.get('post-edit-' + post_id).getContent();
			console.log(update_body);
			$.form('/forums/posts/' + post_id, { _token: 'uDP1Tk70PY8vaaGHdqCBCVIgAMipy5ZkhH5eCKQp', _method: 'PATCH', 'body' : update_body }, 'POST').submit();
		});


		// DELETE BUTTON
		$('.chatter_delete_btn').click(function(){
			parent = $(this).parents('li');
			parent.addClass('delete_warning');
			id = parent.data('id');
			$('#delete_warning_' + id).show();
		});

		$('.chatter_warning_delete .btn-default').click(function(){
			$(this).parent('.chatter_warning_delete').hide();
			$(this).parents('li').removeClass('delete_warning');
		});

		$('.delete_response').click(function(){
			post_id = $(this).parents('li').data('id');
			$.form('/forums/posts/' + post_id, { _token: 'uDP1Tk70PY8vaaGHdqCBCVIgAMipy5ZkhH5eCKQp', _method: 'DELETE'}, 'POST').submit();
		});

	});


</script>
<script src="{{asset('chatterjs/chatter.js')}}"></script>

</body>
</html>
