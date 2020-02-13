<!DOCTYPE html>
<html>
<head>
	<meta id="scale" content="initial-scale=1, maximum-scale=1, user-scalable=0" name="viewport">
	<script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script>
	<script type="text/javascript" src="../js/data.js"></script>
	<script type="text/javascript" src="../js/index.js"></script>
	<style type="text/css">
		*{
					padding:0;
					margin:0;
				}
				a{
					text-decoration: none;
				}
		
				.form-control{
					display: inline-block;
				    width: auto;
				    padding: 6px 12px;
				    font-size: 14px;
				    line-height: 1.42857143;
				    color: #555;
				    background-color: #fff;
				    background-image: none;
				    border: 1px solid #ccc;
				    border-radius: 4px;
				    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
				    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
				    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
				    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
				    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
				}
		
				.btn{
					display: inline-block;
				    padding: 6px 12px;
				    margin-bottom: 0;
				    font-size: 14px;
				    font-weight: 400;
				    line-height: 1.42857143;
				    text-align: center;
				    white-space: nowrap;
				    vertical-align: middle;
				    -ms-touch-action: manipulation;
				    touch-action: manipulation;
				    cursor: pointer;
				    -webkit-user-select: none;
				    -moz-user-select: none;
				    -ms-user-select: none;
				    user-select: none;
				    background-image: none;
				    border: 1px solid transparent;
				    border-radius: 4px;
				}
		
				.btn-primary {
				    color: #fff;
				    background-color: #337ab7;
				    border-color: #2e6da4;
				}
		
				/*组件主样式*/
				.overflow-text{
					display: block;
				    white-space:nowrap;
				    overflow:hidden; 
				    text-overflow:ellipsis;
				    opacity:0;
				    clear: both;
				    padding:0 10px;
				    border-radius: 10px;
				    box-sizing: border-box;
				    max-width: 100%;
				    color:#fff;
				    animation:colorchange 3s infinite alternate;
					-webkit-animation:colorchange 3s infinite alternate; /*Safari and Chrome*/
				}
				@keyframes colorchange{
					0%{
						color:red;
					}
					50%{
						color:green;
					}
					100%{
						color:#6993f9;
					}
				}
				/*组件主样式*/
	</style>
</head>
<body>
	<button id="stop" class="btn btn-primary">停止</button>
	<button id="open" class="btn btn-primary">弹</button>
	<input type="text" class="form-control" name="" id="barrage_content" placeholder="添加弹幕内容"><button class="btn btn-primary" id="submit_barraget">发送</button>
</body>
<script type="text/javascript">
	// 数据初始化
	var Obj = $('body').barrage({
		data : data, //数据列表
		row : 5,   //显示行数
		time : 2500, //间隔时间
		gap : 20,    //每一个的间隙
		position : 'fixed', //绝对定位
		direction : 'bottom right', //方向
		ismoseoverclose : true, //悬浮是否停止
		height : 30, //设置单个div的高度
	})
	Obj.start(); 
	
	//添加评论
	$("#submit_barraget").click(function(){
		var val = $("#barrage_content").val();
		//此格式与dataa.js的数据格式必须一致
		var addVal = {
			href : '',
			text : val
		}
		//添加进数组
		Obj.data.unshift(addVal);
		alert('评论成功');
	})

	$("#open").click(function(){
		Obj.start(); 
	})
	$("#stop").click(function(){
		Obj.close();
	})
</script>
</html>