$(document).ready(function() {
    $("[unique-script-id='w-w-dm-id'] .img .desc").hide();
  
    $("[unique-script-id='w-w-dm-id'] .img").mouseenter(function(item) {
      $("[unique-script-id='w-w-dm-id'] .img .overlay").removeClass("overlay-visible");
      $("[unique-script-id='w-w-dm-id'] .img .desc").hide();
      $("#" + $(item.currentTarget).attr("id") + ' .overlay').addClass("overlay-visible");
      $("#" + $(item.currentTarget).attr("id") + ' .desc').show();
      console.log(item.currentTarget);
    });
    $("[unique-script-id='w-w-dm-id'] .tab").click(function() {
      const value = $(this).attr('data-filter');
      if (value == 'all') {
        $("[unique-script-id='w-w-dm-id'] .img").show('5000');
      } else {
        $("[unique-script-id='w-w-dm-id'] .img").not('.' + value).hide('5000');
        $("[unique-script-id='w-w-dm-id'] .img").filter('.' + value).show('5000');
      }
    });
  
    $("[unique-script-id='w-w-dm-id'] .tab").click(function() {
      $(this).addClass('tab-active').siblings().removeClass('tab-active');
    });
  })