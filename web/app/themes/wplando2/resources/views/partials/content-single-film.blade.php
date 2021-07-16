<article class="container single-film" @php post_class() @endphp>
  <header class="row">
    <div class="main-img col-12 text-center">
      @php  echo get_the_post_thumbnail() @endphp
    </div>
    
    <div class="col-12"><h1 class="entry-title">{!! get_the_title() !!}</h1></div>
    <div class="col-12"> @include('partials/entry-meta')</div>
   
  </header>
  <div class="row entry-content">
    
    <div class="col-12">
      @php the_content() @endphp
    </div>
  </div>
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
  @php comments_template('/partials/comments.blade.php') @endphp
</article>
