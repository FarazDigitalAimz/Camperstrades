<?= $this->extend("layout/base");?>
<?= $this->section("content");?>
<div id="response_search"></div>
<?= $this->endSection();?>
<?=$this->section("scripts")?>
<script type="text/javascript">


   // var default=defaultFunction();
    var url_string=window.location.href;
    var url = new URL(url_string);
    var c = url.searchParams.get("page");
    var page_no= parseInt(c -1);
    if(page_no > 0){
        page_no=page_no;
        window.history.go(page_no);
    }else{
        page_no=1;
    }
   $(window).on('popstate', function(event) {
       defaultFunction(page_no)
   });

   $( document ).ready(function() {
       defaultFunction();
   });
    function defaultFunction(page_no=1)
    {
        var url_string=window.location.href;
        $.ajax({
            url: url_string,
            beforeSend: function (f) {

            },
            method: 'GET',
            // DataTPE:JSON,
            headers: {'X-Requested-With': 'XMLHttpRequest'},
            success: function (data) {
                var response=JSON.parse(data);

            $('#response_search').html(response.html);
            }
        })
    }

   $(document).on('click', 'ul.pagination li a', function(e) {
       e.preventDefault();
       var href=$(this).attr("href");
       const nextURL = href;
       const nextTitle = 'Adds';
       const nextState = { additionalInformation: 'Updated the URL with JS' };
       window.history.pushState(nextState, nextTitle, nextURL);
       window.history.replaceState(nextState, nextTitle, nextURL);

           $.ajax({
               url: href,
               beforeSend: function (f) {

               },
               method: 'GET',
               headers: {'X-Requested-With': 'XMLHttpRequest'},
               success: function (data) {
                   var response=JSON.parse(data);
                   $('#response_search').html(response.html);
               }
           })
   });


</script>
<?= $this->endSection();?>


