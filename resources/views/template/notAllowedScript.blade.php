<script src="{{ asset('js/cookie.min.js')}}" ></script>
<script type="text/javascript">
  var is=Cookies.get('isLiveC');
  var result = window.history.length;
  console.log('hisorial:'+result);
  console.log('is:'+is);
if (sessionStorage.getItem('isLive') == null && localStorage.getItem('isLiveLocal')==null &&  is==null ) {
  console.log('entra1');
  r= Math.floor((Math.random() * 10000) + 1);
  Cookies.set('isLiveC',r);
  sessionStorage.setItem('isLive',r);
  localStorage.setItem('isLiveLocal',r);
}else if(localStorage.getItem('isLiveLocal')==null && is!=null){
        console.log('entra2');
        var is=Cookies.get('isLiveC');
        sessionStorage.setItem('isLive',is);
        localStorage.setItem('isLiveLocal',is);
  }else if(localStorage.getItem('isLiveLocal')!=null && is==null && result<2){
    console.log('entra6');
    r= Math.floor((Math.random() * 10000) + 1);
    Cookies.set('isLiveC',r);
    sessionStorage.setItem('isLive',r);
    localStorage.setItem('isLiveLocal',r);
  }else if(localStorage.getItem('isLiveLocal')!=null && is!=null &&sessionStorage.getItem('isLive') == null){
      console.log('entra4');
    sessionStorage.setItem('isLive', Math.floor((Math.random() * 10000) + 1));
  }else if (localStorage.getItem('isLiveLocal')==null && is!=null){
    console.log('entra7');
    var is=Cookies.get('isLiveC');
    sessionStorage.setItem('isLive',is);
  }
  var s = sessionStorage.getItem('isLive');
  var sLocal = localStorage.getItem('isLiveLocal');
  if(s!=sLocal){
    console.log('dife');
    window.location.href = '{{route('notAllowed')}}';
  }
  console.log('entra3');
</script>
