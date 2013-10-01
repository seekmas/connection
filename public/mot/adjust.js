  $(function(){
    $('div.panel-body').mouseover( function(){
      $(this).find('small').css({'color' : '#000'});
    });
    $('div.panel-body').mouseout( function() {
      $(this).find('small').css({'color' : ''});
    });

    $text = $('div.panel-body').has('.mot-title');
    $.each($text , function(){
      $(this).html( $(this).html().replace(/\@(\S+)/ , '<a href="#">@$1</a>'));
    });

    $text = $('div.panel-body').has('.mot-text');
    $.each( $text , function(){
      var ori = $(this).find('h3 > small').html();
      if( ori === undefined)
        return ;
      str = ori.replace(/\@(\S+)/ , '<a href="#">@$1</a>');
      $(this).find('.mot-text > small').html( str);
    });

    $('span.label.label-info').on('mouseover' , function(){
      $(this).removeClass('label-info');
      $(this).addClass('label-success');
    });
    $('span.label.label-info').on('mouseout' , function () {
      $(this).removeClass('label-success');
      $(this).addClass('label-info');
    });

     $('span.label.label-default').on('mouseover' , function(){
      $(this).removeClass('label-default');
      $(this).addClass('label-danger');
    });
    $('span.label.label-default').on('mouseout' , function () {
      $(this).removeClass('label-danger');
      $(this).addClass('label-default');
    });   

    $('#accordion').collapse('show');
    
    $('li').on('mouseover' , function (){
      $(this).addClass('active');
    });

    $('li').on('mouseout' , function (){
      $(this).removeClass('active');
    });

    $('.panel.mot-article').on('mouseover' , function (){
      $(this).addClass('panel-hover');
    });

    $('.panel.mot-article').on('mouseout' , function (){
      $(this).removeClass('panel-hover');
    });

    $('#attitude').fseditor({
      placeholder: 'typeing your newsfeed',
      transition: 'fade',
      overlay: true,
      maxWidth: 1020,
      maxHeight: 450
    });

    $('.user_link').on('mouseover' , function(){
      
      $(this).grumble({
        text: $(this).text()+$(this).attr('data-origin'), 
        angle: 90, 
        distance: 50, 
        showAfter: 500,
        hideOnClick: true,
      });

    });

  });