// JavaScript Document
$(document).ready(function(e) {
    $("#menu div").addClass("menu_bg_y");
	$("#menu div:eq(3)").addClass("menu_bg");
	
	$("#txtitle div").click(function(e) {
		
		if($("#"+ $(this).attr("t")).html() == ""){
			
			
			$("#txtitle div").removeClass("clicktitlebg");
			$(this).addClass("clicktitlebg");
			
			$(".tcontent").hide();
			
			$("#"+ $(this).attr("t")).show();
			
			$("#"+ $(this).attr("t")).html($("#"+ $(this).attr("s")).html());
			$("#"+ $(this).attr("s")).html("");
			$("#T").val($(this).attr("tj"));
			$("#tscontent").text($(this).children("span").text());
			
			if($("#money").val() != "" && parseInt(parseFloat($("#money").val()) / 100)*100 == parseFloat($("#money").val())){
				checkmoney();
				}
			
		}
		
    });
	
	$("#txtitle div:eq(0)").click();
	
	
	////////////////////////////////////////////////////////////////////////////////////
	////////////////////////////////////////////////////////////////////////////////////
	
	
});

function clearNoNum(obj)
{
	//�Ȱѷ����ֵĶ��滻�����������ֺ�.
	obj.value = obj.value.replace(/[^\d.]/g,"");
	//���뱣֤��һ��Ϊ���ֶ�����.
	obj.value = obj.value.replace(/^\./g,"");
	//��ֻ֤�г���һ��.��û�ж��.
	obj.value = obj.value.replace(/\.{2,}/g,".");
	//��֤.ֻ����һ�Σ������ܳ�����������
	obj.value = obj.value.replace(".","$#$").replace(/\./g,"").replace("$#$",".");
}

function checkmoney(){
	
	$("#sxf").text("");
	$("#sjdzjj").text("");
	
	
	if($("#money").val() == ""){
		
		alert("������Ϊ�գ�");
		$("#money").focus();
		
		}else{
			
			if(parseFloat($("#money").val()) > parseFloat($("#kyye").val())){
				
				alert("���㣡");
			    $("#money").focus();	
				
				}else{
					
					if(parseFloat($("#money").val()) < parseFloat($("#minmoney").val())){
						
						alert("����������"+$("#minmoney").val()+"Ԫ��");
						$("#money").focus();
						return false;
					}
					
					if(parseFloat($("#money").val()) > parseFloat($("#maxmoney").val())){
						
						alert("�����ܴ���"+$("#maxmoney").val()+"Ԫ��");
						$("#money").focus();
						return false;
					}
					
					if(parseFloat($("#money").val())+ parseFloat($("#yqlmoney").val()) > parseFloat($("#mtsxmoney").val())){
						
						alert("ÿ�����������ܽ��ܳ��� "+$("#mtsxmoney").val()+"��");
						$("#money").focus();
						return false;
					}
					
				/*	if(parseInt(parseFloat($("#money").val()) / 100)*100 != parseFloat($("#money").val())){
						
						alert("�����ֻ����100����������");
						$("#money").focus();
						return false;
					}*/
					
					
					//////////////////////////////////////////////////////////////
					//alert("tkmoney="+$("#money").val()+"&T="+$("#T").val());
					$.ajax({
					type:'POST',
					url:'/User_Index_tkjsfl.html',
					data:"tkmoney="+$("#money").val()+"&T="+$("#T").val(),
					dataType:'text',
					success:function(str){
						 str = str.split("|")
					     if(str[1] != "ok"){
							// alert(str[1]);
							 }else{
					         	$("#sxf").text(str[0]+" Ԫ");
								$("#dgsxf").text(str[0]);
								$("#sjdzjj").text( parseFloat($("#money").val()) - parseFloat(str[0]));
								$("#hjsxf").html("(�ϼ������ѣ�<span style='color:#F00'>"+parseFloat($("#dgsxf").text()) *  parseFloat($("#yhslid").val())+"</span> Ԫ)");
								
								$("#hjsjje").html("(�ϼ�ʵ�ʵ��˽�<span style='color:#F00'>"+parseFloat($("#sjdzjj").text()) *  parseFloat($("#yhslid").val())+"</span> Ԫ)");
							 }
						},
					error:function(){
						alert("����ʧ�ܣ�");
						}	
					});
					/////////////////////////////////////////////////////////////
					
					}
			
			}
	
	}
	
function xztkyh(){
	
	$("#mrbank").hide();
	$("#selecttkyh").show();
	$("#tkyhspan").hide();
	$("#xgspan").show();
	}	

function fhfh(){
	$("#mrbank").show();
	$("#selecttkyh").hide();
	$("#tkyhspan").show();
	$("#xgspan").hide();
	}	

function qrxgqrxg(){
	
	$.ajax({
	  type:'POST',
	  url:'/User_Index_tkyhajax.html',
	  data:"tkyh="+$("#tkyh").val(),
	  dataType:'text',
	  success:function(str){
		   str = str.split("|")
		   if(str[0] != "ok"){
			   alert(str[1]);
			   }else{
				  
				  $("#mrbank").html(str[1]);
				  $("#tkyhhidden").val(str[2]);
				  fhfh();
			   }
		  },
	  error:function(){
		  alert("����ʧ�ܣ�");
		  }	
	  });
  
	}	
	
function sqtk(){
	
	//alert($("#T").val());
	//////////////////////////////////////////////////////
	$("#sxf").text("");
	$("#sjdzjj").text("");
		if($("#money").val() == ""){
		
		alert("������Ϊ�գ�");
		$("#money").focus();
		
		}else{
			
			if(parseFloat($("#money").val()) > parseFloat($("#kyye").val())){
				
				alert("���㣡");
			    $("#money").focus();	
				
				}else{
					
					
					if(parseFloat($("#money").val()) < parseFloat($("#minmoney").val())){
						
						alert("����������"+$("#minmoney").val()+"Ԫ��");
						$("#money").focus();
						return false;
					}
					
					if(parseFloat($("#money").val()) > parseFloat($("#maxmoney").val())){
						
						alert("�����ܴ���"+$("#maxmoney").val()+"Ԫ��");
						$("#money").focus();
						return false;
					}
					
					var a = 1;
					if(parseInt($("#wtwt").val()) == 1){
						if(parseInt($("#yhslid").val())==0){
							
							alert("ί�����������������Ϊ0");
							return false;
							
							}else{
								a = parseInt($("#yhslid").val());
								}
					}
					if(parseFloat($("#money").val()) * a + parseFloat($("#yqlmoney").val()) > parseFloat($("#mtsxmoney").val())){
						
						alert("ÿ�����������ܽ��ܳ��� "+$("#mtsxmoney").val()+"��");
						$("#money").focus();
						return false;
					}
					
					/*if(parseInt(parseFloat($("#money").val()) / 100)*100 != parseFloat($("#money").val())){
						
						alert("�����ֻ����100����������");
						$("#money").focus();
						return false;
					}*/
					
					
					//////////////////////////////////////////////////////////////
					$.ajax({
					type:'POST',
					url:'/User_Index_tkjsfl.html',
					data:"tkmoney="+$("#money").val()+"&T="+$("#T").val(),
					dataType:'text',
					success:function(str){
						 str = str.split("|")
					     if(str[1] != "ok"){
							// alert(str[1]);
							 }else{
					         	$("#sxf").text(str[0]+" Ԫ");
								$("#dgsxf").text(str[0]);
								$("#sjdzjj").text( parseFloat($("#money").val()) - parseFloat(str[0]));
								$("#hjsxf").html("(�ϼ������ѣ�<span style='color:#F00'>"+parseFloat($("#dgsxf").text()) *  parseFloat($("#yhslid").val())+"</span> Ԫ)");
								
								$("#hjsjje").html("(�ϼ�ʵ�ʵ��˽�<span style='color:#F00'>"+parseFloat($("#sjdzjj").text()) *  parseFloat($("#yhslid").val())+"</span> Ԫ)");
								fhfh();
								//////////////////////////////֧������//////////////////////////////////////////
								
								if($("#paypassword").val() == ""){
									 alert("֧�����벻��Ϊ�գ�");
									 $("#paypassword").focus();
								}else{
									
									$.ajax({
									type:'POST',
									url:'/User_Index_yzzfmm.html',
									data:"paypassword="+$("#paypassword").val(),
									dataType:'text',
									success:function(str){
											if(str!=1){
												alert("֧���������");
												$("#paypassword").focus();
											}else{
												if(confirm("��ȷ��Ҫ���������")){
													
													$("#txtitle div").hide();
													$(".tcontent table").hide();
													$(".tabts").show();
		////////////////////////////////////////////////////////////////////////////////////////////////////
		
														  $.ajax({
															  type:'POST',
															  url:'/User_Index_tkmoney.html',
											data:"money="+$("#money").val()+"&tkyhid="+$("#tkyhhidden").val()+"&paypassword="+$("#paypassword").val()+"&T="+$("#T").val()+"&wtwt="+$("#wtwt").val()+"&sl="+$("#yhslid").val()+"&wtbanklisttext="+$("#wtbanklisttext").val(),
															  dataType:'text',
															  success:function(str){
																  if(str == "ok"){
																	  $(".tabts tr td").html("�������ɹ���<br><br><img src='/Public/User/images/fh.gif' onclick='fhtk();'>");
																	  }else{
																		  $(".tabts tr td").html(str+"<br><img src='/Public/User/images/fh.gif' onclick='fhtk();'>");
																		  }
																  },
															  error:function(){
																  alert("����ʧ�ܣ�");
																  }	
															  });
														  
		///////////////////////////////////////////////////////////////////////////////////////////////////											
													
													}
											}
											
										},
									error:function(){
										alert("����ʧ�ܣ�");
										}	
									});	 
									
								}
															
								//////////////////////////////֧������//////////////////////////////////////////
							 }
						},
					error:function(){
						alert("����ʧ�ܣ�");
						}	
					});
					/////////////////////////////////////////////////////////////
					
					}
			
			}
	/////////////////////////////////////////////////////
	
	}	
	
function fhtk(){
	
	if($("#wtwt").val() == 1){
		
		location.href = "/User_Index_wttk.html";
		
		}else{
			
			location.href = "/User_Index_tktx.html";
			
			}
	
	
	
	}	
	
////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////