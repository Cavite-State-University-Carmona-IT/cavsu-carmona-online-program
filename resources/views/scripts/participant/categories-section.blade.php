@section('page-script')
    <script>
        $("#btnExt1").mouseover(function() {
            $("#isOpenExt1").show();
        }).mouseout(function() {
            $("#isOpenExt1").hide();
        });

        $("#btnExt2").mouseover(function() {
            $("#isOpenExt2").show();
        }).mouseout(function() {
            $("#isOpenExt2").hide();
        });

        $("#btnExt3").mouseover(function() {
            $("#isOpenExt3").show();
        }).mouseout(function() {
            $("#isOpenExt3").hide();
        });

        $("#btnExt4").mouseover(function() {
            $("#isOpenExt4").show();
        }).mouseout(function() {
            $("#isOpenExt4").hide();
        });

        $("#btnExt5").mouseover(function() {
            $("#isOpenExt5").show();
        }).mouseout(function() {
            $("#isOpenExt5").hide();
        });

        // topics
        // field of interest
        $("#isOpenExt1").mouseover(function() {
            $("#isOpenExt1").show();
            $("#btnExt1").css('border-right-color','#26aa66');
            $("#btnExt1").css('color','#26aa66');
        }).mouseout(function() {
            $("#isOpenExt1").hide();
            $("#btnExt1").css('border-right-color','');
            $("#btnExt1").css('color','');
        });

        $("#isOpenExt2").mouseover(function() {
            $("#isOpenExt2").show();
            $("#btnExt2").css('border-right-color','#26aa66');
            $("#btnExt2").css('color','#26aa66');
        }).mouseout(function() {
            $("#isOpenExt2").hide();
            $("#btnExt2").css('border-right-color','');
            $("#btnExt2").css('color','');
        });

        $("#isOpenExt3").mouseover(function() {
            $("#isOpenExt3").show();
            $("#btnExt3").css('border-right-color','#26aa66');
            $("#btnExt3").css('color','#26aa66');
        }).mouseout(function() {
            $("#isOpenExt3").hide();
            $("#btnExt3").css('border-right-color','');
            $("#btnExt3").css('color','');
        });

        $("#isOpenExt4").mouseover(function() {
            $("#isOpenExt4").show();
            $("#btnExt4").css('border-right-color','#26aa66');
            $("#btnExt4").css('color','#26aa66');
        }).mouseout(function() {
            $("#isOpenExt4").hide();
            $("#btnExt4").css('border-right-color','');
            $("#btnExt4").css('color','');
        });

        $("#isOpenExt5").mouseover(function() {
            $("#isOpenExt5").show();
            $("#btnExt5").css('border-right-color','#26aa66');
            $("#btnExt5").css('color','#26aa66');
        }).mouseout(function() {
            $("#isOpenExt5").hide();
            $("#btnExt5").css('border-right-color','');
            $("#btnExt5").css('color','');

        });
    </script>
@endsection
