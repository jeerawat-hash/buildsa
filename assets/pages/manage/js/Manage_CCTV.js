$(function(){

    $(".cctv-close").on("click",function(){

        $("#CCTVplayer").html("");

    });

    $("#CCTV1").on("click",function(){

        $("#CCTVplayer").html("");

        $("#CCTVModal").modal("show");
        $("#CCTVModal").find("#largeModalLabel").text("กล้องวงจรปิดตำแหน่งหน้าอาคาร45");
        $("#CCTVModal").find("#midModalLabel").text("กล้องวงจรปิดตำแหน่งหน้าอาคาร45");


        ////////////
     
    var player = new Clappr.Player({
        source: "https://app.sakorncable.com/hls/cctv21.m3u8",
        preload: "none",
        width: '50%',
        height: '50%',
        parentId: "#CCTVplayer"
    });


        ////////////

    });

    $("#CCTV2").on("click",function(){

        $("#CCTVplayer").html("");

        $("#CCTVModal").modal("show");
        $("#CCTVModal").find("#largeModalLabel").text("กล้องวงจรปิดตำแหน่งทางเข้าบริเวณอาคาร37");
        $("#CCTVModal").find("#midModalLabel").text("กล้องวงจรปิดตำแหน่งทางเข้าบริเวณอาคาร37");

        ////////////
     
    var player = new Clappr.Player({
        source: "https://app.sakorncable.com/hls/cctv22.m3u8",
        preload: "none",
        width: '50%',
        height: '50%',
        parentId: "#CCTVplayer"
    });


        ////////////

    });

    $("#CCTV3").on("click",function(){

        $("#CCTVplayer").html("");

        $("#CCTVModal").modal("show");
        $("#CCTVModal").find("#largeModalLabel").text("กล้องวงจรปิดตำแหน่งอาคาร38");
        $("#CCTVModal").find("#midModalLabel").text("กล้องวงจรปิดตำแหน่งอาคาร38");

        ////////////
     
    var player = new Clappr.Player({
        source: "https://app.sakorncable.com/hls/cctv23.m3u8",
        preload: "none",
        width: '50%',
        height: '50%',
        parentId: "#CCTVplayer"
    });


        ////////////

    });

    $("#CCTV4").on("click",function(){

        $("#CCTVplayer").html("");

        $("#CCTVModal").modal("show");
        $("#CCTVModal").find("#largeModalLabel").text("กล้องวงจรปิดตำแหน่งอาคาร39");
        $("#CCTVModal").find("#midModalLabel").text("กล้องวงจรปิดตำแหน่งอาคาร39");

        ////////////
     
    var player = new Clappr.Player({
        source: "https://app.sakorncable.com/hls/cctv24.m3u8",
        preload: "none",
        width: '50%',
        height: '50%',
        parentId: "#CCTVplayer"
    });


        ////////////

    });

    $("#CCTV5").on("click",function(){

        $("#CCTVplayer").html("");

        $("#CCTVModal").modal("show");
        $("#CCTVModal").find("#largeModalLabel").text("กล้องวงจรปิดตำแหน่งอาคาร65");
        $("#CCTVModal").find("#midModalLabel").text("กล้องวงจรปิดตำแหน่งอาคาร65");

        ////////////
     
    var player = new Clappr.Player({
        source: "https://app.sakorncable.com/hls/cctv25.m3u8",
        preload: "none",
        width: '50%',
        height: '50%',
        parentId: "#CCTVplayer"
    });


        ////////////

    });


    $("#CCTV6").on("click",function(){

        $("#CCTVplayer").html("");

        $("#CCTVModal").modal("show");
        $("#CCTVModal").find("#largeModalLabel").text("กล้องวงจรปิดตำแหน่งอาคาร66");
        $("#CCTVModal").find("#midModalLabel").text("กล้องวงจรปิดตำแหน่งอาคาร66");

        ////////////
     
    var player = new Clappr.Player({
        source: "https://app.sakorncable.com/hls/cctv26.m3u8",
        preload: "none",
        width: '50%',
        height: '50%',
        parentId: "#CCTVplayer"
    });


        ////////////

    }); 


    $("#CCTV7").on("click",function(){

        $("#CCTVplayer").html("");

        $("#CCTVModal").modal("show");
        $("#CCTVModal").find("#largeModalLabel").text("กล้องวงจรปิดตำแหน่งอาคาร43");
        $("#CCTVModal").find("#midModalLabel").text("กล้องวงจรปิดตำแหน่งอาคาร43");

        ////////////
     
    var player = new Clappr.Player({
        source: "https://app.sakorncable.com/hls/cctv27.m3u8",
        preload: "none",
        width: '50%',
        height: '50%',
        parentId: "#CCTVplayer"
    });


        ////////////

    });

    $("#CCTV8").on("click",function(){

        $("#CCTVplayer").html("");

        $("#CCTVModal").modal("show");
        $("#CCTVModal").find("#largeModalLabel").text("กล้องวงจรปิดตำแหน่งอาคาร44");
        $("#CCTVModal").find("#midModalLabel").text("กล้องวงจรปิดตำแหน่งอาคาร44");

        ////////////
     
    var player = new Clappr.Player({
        source: "https://app.sakorncable.com/hls/cctv28.m3u8",
        preload: "none",
        width: '50%',
        height: '50%',
        parentId: "#CCTVplayer"
    });


        ////////////

    });
 


});