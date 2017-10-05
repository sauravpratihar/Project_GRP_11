

<div class="video-section mb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title text-center mb-40">
                                <h2 class="uppercase">Lecture</h2>
                                <h6>Live Lecture</h6>
                            </div>
                        </div>
                    </div>  
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="single-video">
                                <h3 class="sc-sub-title">Live Streaming</h3>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe id="myVid" class="embed-responsive-item" src="" frameborder="0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single-video">
                                <h3 class="sc-sub-title">Whiteboard</h3>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="client/index.html"></iframe>
                                </div>
                            </div>
                        </div>                        
                    </div>       
                </div>            
            </div>

<script>
function alertPop(){
    var url = prompt("Enter URL");
                
    if(url){
        url = url.split('=');
        console.log(url[1]);
        //url = url[1];
        var frame = document.getElementById('myVid');
        frame.setAttribute('src',"https://youtube.com/embed/"+url[1]);
        }
}
</script>
        