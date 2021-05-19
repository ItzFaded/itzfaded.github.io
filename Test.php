<script src="jquery-1.11.2.min.js"></script>
<script src="moment.js"></script>
<script src="jquery.countdown.min.js"></script>
<style>
#exp_div
{
padding:55px;
border:1px solid #ff5a00;
background-color: #ff8400;
color:#fff;
font-size:18px;
width:400px;
}

.count1
{
font-size:22px;
margin:30px;
text-align:center;
font-weight:bold;
color:#ff8400;
}

.container
{
width:500px;
margin:0 auto;
display:block;
}
</style>

<div class="container">
<div class="count1"> </div>
<div id="exp_div">
This div will hide after above count down expired!
</div>
</div>
<script>
$(document).ready(function () {
var nowPlus30Seconds = moment().add('10', 'seconds').format('YYYY/MM/DD HH:mm:ss');

$('.count1').countdown(nowPlus30Seconds)
.on('update.countdown', function (event) { $(this).html(event.strftime('%Y : %D : %H : %M : %S')); })
.on('finish.countdown', function () { $('#exp_div').hide(); });
});
</script>