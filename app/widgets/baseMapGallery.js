/** @jsx React.DOM */
define(['react','map/map_config','widgets/baseMapItem'],function(React2,MapConfig,BaseMapItem){
	'use strict';

	var BaseMapGallery = React.createClass({displayName: "BaseMapGallery",
		render:function(){
			var props = this.props.keys;
			var basemap_options = MapConfig.basemaps_options;
			return (
				React.createElement("div", {id: "gallery"}, 
					React.createElement("div", {id: "gallery_pan_left", onClick: this.scroll_left}), 
					React.createElement("div", {id: "gallery_pan_right", onClick: this.scroll_right}), 
					React.createElement("ul", {id: props.id}, 
						
							basemap_options.map(function(item,i){
								return (React.createElement(BaseMapItem, {keys: item}))
							})
						
						
					)
				)
			);
		},
		scroll_left:function(){
			var navContent = document.getElementById('rightNavContent');
			var maxScrollLeft = navContent.scrollWidth - navContent.clientWidth;
			var gallery_pan_right = document.getElementById('gallery_pan_right');
			var gallery_pan_left = document.getElementById('gallery_pan_left');
			if (navContent.scrollLeft !=0){
				gallery_pan_right.style.display='block';
				$('#rightNavContent').animate({scrollLeft:'-=110'},300);
				navContent.scrollLeft -= 110;
				if (navContent.scrollLeft ==0){
					gallery_pan_left.style.display='none';
				}
			}else{
				gallery_pan_left.style.display='none';
			}


		},
		scroll_right:function(){
			var navContent = document.getElementById('rightNavContent');
			var maxScrollLeft = navContent.scrollWidth - navContent.clientWidth;
			var gallery_pan_right = document.getElementById('gallery_pan_right');
			var gallery_pan_left = document.getElementById('gallery_pan_left');
			if (navContent.scrollLeft <maxScrollLeft){
				gallery_pan_left.style.display='block';
				
				$('#rightNavContent').animate({scrollLeft:'+=110'},300);
				navContent.scrollLeft += 110;
				if (navContent.scrollLeft ==maxScrollLeft){
					gallery_pan_right.style.display='none';
				}
			}else{
				gallery_pan_right.style.display='none';
			}
			
		},
		set_scroll_feature:function(){
			if(basemap_options.length<=2){
				document.getElementById('gallery_pan_right').style.display = 'none';
				document.getElementById('gallery_pan_left').style.display = 'none';
			}
			
		}
	});
	return function(props, id){
		React.render(React.createElement(BaseMapGallery, {keys: props}), document.getElementById(id));
	}
});