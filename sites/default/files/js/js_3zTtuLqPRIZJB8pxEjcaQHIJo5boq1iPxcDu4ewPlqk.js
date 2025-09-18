const period={Daily:"Daily",Weekly:"Weekly",Monthly:"Monthly",All:"All"}
var serverURL="https://views.arabnews.com";var sserverURL="https://pageviews.arabnews.com";class Pageviews{constructor(){}
sendView(articleId,imageUrl,title,articleUrl,onComplete){var error=false;if(typeof articleId!="string"){error=true;}
else if(articleId.length==0){error=true;}
else if(typeof imageUrl!="string"){error=true;}
else if(imageUrl.length==0){error=true;}
else if(typeof title!="string"){error=true;}
else if(title.length==0){error=true;}
else if(typeof articleUrl!="string"){error=true;}
else if(articleUrl.length==0){error=true;}
if(error){console.log("Please provide all the required parameters");}
else{var params={"articleId":articleId,"imageUrl":imageUrl,"title":title,"articleUrl":articleUrl,"device":"web"};jQuery.ajax({url:sserverURL+'/pageview/',type:'POST',data:JSON.stringify(params),contentType:"application/json",dataType:"json",beforeSend:function(xhr){xhr.setRequestHeader('apik','2HDJDG2KDL364GHFH547HDFT');},success:function(data){onComplete(data);},error:function(data){onComplete(data);}})}}
getViews(articleIds,onComplete){var error=false;if(typeof articleIds!="string"){error=true;}
else if(articleIds.length==0){error=true;}
if(error){console.log("Invalid article ID");}
else{jQuery.ajax({url:sserverURL+'/views/web/'+articleIds,type:'GET',contentType:"application/json",dataType:"json",beforeSend:function(xhr){xhr.setRequestHeader('apik','2HDJDG2KDL364GHFH547HDFT');},success:function(data){onComplete(data);},error:function(data){onComplete(data);}})}}
getList(timePeriod,domain,size,p,onComplete){if(size==null){console.log("limit cannot be empty");}
else if(typeof size=="string"){console.log("limit cannot be an string");}
else if(size==0){console.log("limit cannot be 0");}
else if(p==null){console.log("page cannot be empty");}
else if(typeof p=="string"){console.log("page cannot be an string");}
else if(p==0){console.log("page cannot be 0");}
else{if(timePeriod=="Daily"||timePeriod=="Weekly"||timePeriod=="Monthly"||timePeriod=="All"){var listUrl=timePeriod+'/'+size+'/'+p+'/web'
if(domain!=null&&typeof domain=="string"&&domain.length>0){listUrl=timePeriod+'/'+domain+'/'+size+'/'+p+'/web'}
jQuery.ajax({url:sserverURL+'/list/'+listUrl,type:'GET',contentType:"application/json",dataType:"json",beforeSend:function(xhr){xhr.setRequestHeader('apik','2HDJDG2KDL364GHFH547HDFT');},success:function(data){onComplete(data);}})}
else{console.log("Invalid argument for timePeriod param");}}}};var obj=new Pageviews();window.most_read_article=function(period,domain){obj.getList(period,domain,6,1,function(data){var _periodCount=period.toLowerCase()+"Count";var html="";jQuery.each(data,function(i,item){html+='<div class="object-item" data-nid="'+item.articleId+'"><div class="media-object"><div class="media-object-section"><div class="media-object-img"><a href="'+item.articleUrl+'"><img title="'+item.title+'" alt="'+item.title+'" width="100" src="'+item.imageUrl+'"></a></div><div class="meta-area"><span class="views-count"><i class="icomoon-icon icon-views"></i> <span>'+item[_periodCount]+'</span></span></div></div><div class="media-object-section"><h6 class="font-bold"><a href="'+item.articleUrl+'">'+item.title+'</a></h6></div></div>';});var _div_id="#read-panel-"+period.toLowerCase();jQuery(_div_id).append(html);})};