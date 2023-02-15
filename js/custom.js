

jQuery(document).ready(function () {

  var url_string = window.location.href;
  var url = new URL(url_string);
  var type = url.searchParams.get("type");

  // Init Isotope
  $grid = jQuery('.grid').isotope({});

  $grid.isotope({ filter: '*' });

  if (type == 'web') {
    $grid.isotope({ filter: '.web' });


  }
  if (type == 'mobile') {
    $grid.isotope({ filter: '.mobile' });
  }
  if (type == 'ecommerce') {
    $grid.isotope({ filter: '.ecommerce' });
  }

  if (type == 'autre') {
    $grid.isotope({ filter: '.autre' });
  }

  jQuery('.filter-button').on('click', function () {


    if (jQuery(this).attr('id') === 'filter-web') {
      
      $grid.isotope({ filter: '.web' });
    }
    if (jQuery(this).attr('id') === 'filter-mobile') {

      $grid.isotope({ filter: '.mobile' });

    }
    if (jQuery(this).attr('id') === 'filter-autre') {

      $grid.isotope({ filter: '.autre' });

    }
    if (jQuery(this).attr('id') === 'filter-ecommerce') {
      $grid.isotope({ filter: '.ecommerce' });

    }

    if (jQuery(this).attr('id') === 'filter-all') {
      $grid.isotope({ filter: '*' });
    }
  });


});
