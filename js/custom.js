

jQuery(document).ready(function () {
    var url_string = window.location.href;
    var url = new URL(url_string);
    var type = url.searchParams.get("type");
  
    // Init Isotope
    $grid = $('.grid').isotope({});
  
    $grid.isotope({ filter: '*' });
  
    if (type == 'web') {
      $grid.isotope({ filter: '.web' });
    }
    if (type == 'mobile') {
      $grid.isotope({ filter: '.mobile' });
    }
  
    if (type == 'autre') {
      $grid.isotope({ filter: '.autre' });
    }
  
    jQuery('.filter-button').off('click').on('click', function () {
  
     
      if ($(this).attr('id') === 'filter-web') {
  
        $grid.isotope({ filter: '.web' });
      }
      if ($(this).attr('id') === 'filter-mobile') {
  
        $grid.isotope({ filter: '.mobile' });
  
      }
      if ($(this).attr('id') === 'filter-autre') {
     
        $grid.isotope({ filter: '.autre' });
  
      }
  
      if ($(this).attr('id') === 'filter-all') {
        $grid.isotope({ filter: '*' });
      }
    });
  
    
  
});