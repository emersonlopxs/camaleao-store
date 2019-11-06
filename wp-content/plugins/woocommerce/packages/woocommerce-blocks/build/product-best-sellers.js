this.wc=this.wc||{},this.wc.blocks=this.wc.blocks||{},this.wc.blocks["product-best-sellers"]=function(e){function t(t){for(var r,i,s=t[0],u=t[1],a=t[2],b=0,p=[];b<s.length;b++)i=s[b],Object.prototype.hasOwnProperty.call(n,i)&&n[i]&&p.push(n[i][0]),n[i]=0;for(r in u)Object.prototype.hasOwnProperty.call(u,r)&&(e[r]=u[r]);for(l&&l(t);p.length;)p.shift()();return c.push.apply(c,a||[]),o()}function o(){for(var e,t=0;t<c.length;t++){for(var o=c[t],r=!0,s=1;s<o.length;s++){var u=o[s];0!==n[u]&&(r=!1)}r&&(c.splice(t--,1),e=i(i.s=o[0]))}return e}var r={},n={8:0},c=[];function i(t){if(r[t])return r[t].exports;var o=r[t]={i:t,l:!1,exports:{}};return e[t].call(o.exports,o,o.exports,i),o.l=!0,o.exports}i.m=e,i.c=r,i.d=function(e,t,o){i.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:o})},i.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},i.t=function(e,t){if(1&t&&(e=i(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var o=Object.create(null);if(i.r(o),Object.defineProperty(o,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var r in e)i.d(o,r,function(t){return e[t]}.bind(null,r));return o},i.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return i.d(t,"a",t),t},i.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},i.p="";var s=window.webpackWcBlocksJsonp=window.webpackWcBlocksJsonp||[],u=s.push.bind(s);s.push=t,s=s.slice();for(var a=0;a<s.length;a++)t(s[a]);var l=u;return c.push([559,1,0]),o()}({0:function(e,t){!function(){e.exports=this.wp.element}()},1:function(e,t){!function(){e.exports=this.wp.i18n}()},13:function(e,t){!function(){e.exports=this.React}()},14:function(e,t){!function(){e.exports=this.moment}()},17:function(e,t){!function(){e.exports=this.wp.apiFetch}()},18:function(e,t){!function(){e.exports=this.wp.editor}()},19:function(e,t){!function(){e.exports=this.wp.url}()},2:function(e,t){!function(){e.exports=this.wp.components}()},21:function(e,t){!function(){e.exports=this.wp.compose}()},23:function(e,t){!function(){e.exports=this.wp.blocks}()},33:function(e,t){!function(){e.exports=this.wp.keycodes}()},36:function(e,t,o){"use strict";o.d(t,"b",function(){return n});var r=o(5),n=["woocommerce/product-best-sellers","woocommerce/product-category","woocommerce/product-new","woocommerce/product-on-sale","woocommerce/product-top-rated"];t.a={columns:{type:"number",default:r.DEFAULT_COLUMNS},rows:{type:"number",default:r.DEFAULT_ROWS},alignButtons:{type:"boolean",default:!1},categories:{type:"array",default:[]},catOperator:{type:"string",default:"any"},contentVisibility:{type:"object",default:{title:!0,price:!0,rating:!0,button:!0}}}},37:function(e,t,o){"use strict";var r=o(20),n=o.n(r),c=o(0),i=o(1),s=(o(7),o(2));function u(e,t){var o=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter(function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable})),o.push.apply(o,r)}return o}function a(e){for(var t=1;t<arguments.length;t++){var o=null!=arguments[t]?arguments[t]:{};t%2?u(o,!0).forEach(function(t){n()(e,t,o[t])}):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(o)):u(o).forEach(function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(o,t))})}return e}t.a=function(e){var t=e.onChange,o=e.settings,r=o.button,n=o.price,u=o.rating,l=o.title;return Object(c.createElement)(c.Fragment,null,Object(c.createElement)(s.ToggleControl,{label:Object(i.__)("Product title",'woocommerce'),help:l?Object(i.__)("Product title is visible.",'woocommerce'):Object(i.__)("Product title is hidden.",'woocommerce'),checked:l,onChange:function(){return t(a({},o,{title:!l}))}}),Object(c.createElement)(s.ToggleControl,{label:Object(i.__)("Product price",'woocommerce'),help:n?Object(i.__)("Product price is visible.",'woocommerce'):Object(i.__)("Product price is hidden.",'woocommerce'),checked:n,onChange:function(){return t(a({},o,{price:!n}))}}),Object(c.createElement)(s.ToggleControl,{label:Object(i.__)("Product rating",'woocommerce'),help:u?Object(i.__)("Product rating is visible.",'woocommerce'):Object(i.__)("Product rating is hidden.",'woocommerce'),checked:u,onChange:function(){return t(a({},o,{rating:!u}))}}),Object(c.createElement)(s.ToggleControl,{label:Object(i.__)("Add to Cart button",'woocommerce'),help:r?Object(i.__)("Add to Cart button is visible.",'woocommerce'):Object(i.__)("Add to Cart button is hidden.",'woocommerce'),checked:r,onChange:function(){return t(a({},o,{button:!r}))}}))}},4:function(e,t){!function(){e.exports=this.lodash}()},41:function(e,t,o){"use strict";var r=o(16),n=o.n(r),c=o(8),i=o.n(c),s=o(9),u=o.n(s),a=o(10),l=o.n(a),b=o(11),p=o.n(b),d=o(15),g=o.n(d),f=o(12),m=o.n(f),O=o(0),h=o(1),w=o(19),j=o(17),y=o.n(j),_=o(4),v=(o(7),o(26)),k=o(2),C=o(5),P=(o(86),function(e){function t(){var e;return i()(this,t),(e=l()(this,p()(t).apply(this,arguments))).state={list:[],loading:!0},e.renderItem=e.renderItem.bind(g()(e)),e}return m()(t,e),u()(t,[{key:"componentDidMount",value:function(){var e=this;y()({path:Object(w.addQueryArgs)("".concat(C.ENDPOINTS.products,"/categories"),{per_page:-1})}).then(function(t){e.setState({list:t,loading:!1})}).catch(function(){e.setState({list:[],loading:!1})})}},{key:"renderItem",value:function(e){var t=e.item,o=e.search,r=e.depth,c=void 0===r?0:r,i=["woocommerce-product-categories__item"];o.length&&i.push("is-searching"),0===c&&0!==t.parent&&i.push("is-skip-level");var s=t.breadcrumbs.length?"".concat(t.breadcrumbs.join(", "),", ").concat(t.name):t.name;return Object(O.createElement)(v.b,n()({className:i.join(" ")},e,{showCount:!0,"aria-label":Object(h.sprintf)(Object(h._n)("%s, has %d product","%s, has %d products",t.count,'woocommerce'),s,t.count)}))}},{key:"render",value:function(){var e=this.state,t=e.list,o=e.loading,r=this.props,n=r.onChange,c=r.onOperatorChange,i=r.operator,s=r.selected,u=r.isSingle,a={clear:Object(h.__)("Clear all product categories",'woocommerce'),list:Object(h.__)("Product Categories",'woocommerce'),noItems:Object(h.__)("Your store doesn't have any product categories.",'woocommerce'),search:Object(h.__)("Search for product categories",'woocommerce'),selected:function(e){return Object(h.sprintf)(Object(h._n)("%d category selected","%d categories selected",e,'woocommerce'),e)},updated:Object(h.__)("Category search results updated.",'woocommerce')};return Object(O.createElement)(O.Fragment,null,Object(O.createElement)(v.a,{className:"woocommerce-product-categories",list:t,isLoading:o,selected:s.map(function(e){return Object(_.find)(t,{id:e})}).filter(Boolean),onChange:n,renderItem:this.renderItem,messages:a,isHierarchical:!0,isSingle:u}),!!c&&Object(O.createElement)("div",{className:s.length<2?"screen-reader-text":""},Object(O.createElement)(k.SelectControl,{className:"woocommerce-product-categories__operator",label:Object(h.__)("Display products matching",'woocommerce'),help:Object(h.__)("Pick at least two categories to use this setting.",'woocommerce'),value:i,onChange:c,options:[{label:Object(h.__)("Any selected categories",'woocommerce'),value:"any"},{label:Object(h.__)("All selected categories",'woocommerce'),value:"all"}]})))}}]),t}(O.Component));P.defaultProps={operator:"any",isSingle:!1},t.a=P},44:function(e,t){!function(){e.exports=this.ReactDOM}()},45:function(e,t,o){"use strict";var r=o(0),n=o(1),c=o(4),i=(o(7),o(2)),s=o(5);t.a=function(e){var t=e.columns,o=e.rows,u=e.setAttributes,a=e.alignButtons;return Object(r.createElement)(r.Fragment,null,Object(r.createElement)(i.RangeControl,{label:Object(n.__)("Columns",'woocommerce'),value:t,onChange:function(e){var t=Object(c.clamp)(e,s.MIN_COLUMNS,s.MAX_COLUMNS);u({columns:Object(c.isNaN)(t)?"":t})},min:s.MIN_COLUMNS,max:s.MAX_COLUMNS}),Object(r.createElement)(i.RangeControl,{label:Object(n.__)("Rows",'woocommerce'),value:o,onChange:function(e){var t=Object(c.clamp)(e,s.MIN_ROWS,s.MAX_ROWS);u({rows:Object(c.isNaN)(t)?"":t})},min:s.MIN_ROWS,max:s.MAX_ROWS}),Object(r.createElement)(i.ToggleControl,{label:Object(n.__)("Align Add to Cart buttons",'woocommerce'),help:a?Object(n.__)("Buttons are aligned vertically.",'woocommerce'):Object(n.__)("Buttons follow content.",'woocommerce'),checked:a,onChange:function(){return u({alignButtons:!a})}}))}},46:function(e,t,o){"use strict";var r=o(0),n=o(6),c=o.n(n),i=o(58),s=o.n(i),u=o(5);o.d(t,"a",function(){return a});var a=function(e){return function(t){var o=t.attributes,n=o.align,i=o.contentVisibility,a=c()(n?"align".concat(n):"",{"is-hidden-title":!i.title,"is-hidden-price":!i.price,"is-hidden-rating":!i.rating,"is-hidden-button":!i.button});return Object(r.createElement)(r.RawHTML,{className:a},function(e,t){var o=e.attributes,r=o.attributes,n=o.attrOperator,c=o.categories,i=o.catOperator,a=o.orderby,l=o.products,b=o.columns||u.DEFAULT_COLUMNS,p=o.rows||u.DEFAULT_ROWS,d=new Map;switch(d.set("limit",p*b),d.set("columns",b),c&&c.length&&(d.set("category",c.join(",")),i&&"all"===i&&d.set("cat_operator","AND")),r&&r.length&&(d.set("terms",r.map(function(e){return e.id}).join(",")),d.set("attribute",r[0].attr_slug),n&&"all"===n&&d.set("terms_operator","AND")),a&&("price_desc"===a?(d.set("orderby","price"),d.set("order","DESC")):"price_asc"===a?(d.set("orderby","price"),d.set("order","ASC")):"date"===a?(d.set("orderby","date"),d.set("order","DESC")):d.set("orderby",a)),t){case"woocommerce/product-best-sellers":d.set("best_selling","1");break;case"woocommerce/product-top-rated":d.set("orderby","rating");break;case"woocommerce/product-on-sale":d.set("on_sale","1");break;case"woocommerce/product-new":d.set("orderby","date"),d.set("order","DESC");break;case"woocommerce/handpicked-products":if(!l.length)return"";d.set("ids",l.join(",")),d.set("limit",l.length);break;case"woocommerce/product-category":if(!c||!c.length)return"";break;case"woocommerce/products-by-attribute":if(!r||!r.length)return""}var g="[products",f=!0,m=!1,O=void 0;try{for(var h,w=d[Symbol.iterator]();!(f=(h=w.next()).done);f=!0){var j=s()(h.value,2);g+=" "+j[0]+'="'+j[1]+'"'}}catch(e){m=!0,O=e}finally{try{f||null==w.return||w.return()}finally{if(m)throw O}}return g+="]"}(t,e))}}},47:function(e,t){!function(){e.exports=this.wp.viewport}()},5:function(e,t){!function(){e.exports=this.wc["wc-block-settings"]}()},51:function(e,t){!function(){e.exports=this.wp.hooks}()},53:function(e,t){!function(){e.exports=this.wp.htmlEntities}()},54:function(e,t){!function(){e.exports=this.wp.date}()},559:function(e,t,o){"use strict";o.r(t);var r=o(20),n=o.n(r),c=o(0),i=o(1),s=o(23),u=o(4),a=o(29),l=o.n(a),b=o(8),p=o.n(b),d=o(9),g=o.n(d),f=o(10),m=o.n(f),O=o(11),h=o.n(O),w=o(12),j=o.n(w),y=o(2),_=o(18),v=(o(7),o(37)),k=o(45),C=o(41),P=function(e){function t(){return p()(this,t),m()(this,h()(t).apply(this,arguments))}return j()(t,e),g()(t,[{key:"getInspectorControls",value:function(){var e=this.props,t=e.attributes,o=e.setAttributes,r=t.categories,n=t.catOperator,s=t.columns,u=t.contentVisibility,a=t.rows,l=t.alignButtons;return Object(c.createElement)(_.InspectorControls,{key:"inspector"},Object(c.createElement)(y.PanelBody,{title:Object(i.__)("Layout",'woocommerce'),initialOpen:!0},Object(c.createElement)(k.a,{columns:s,rows:a,alignButtons:l,setAttributes:o})),Object(c.createElement)(y.PanelBody,{title:Object(i.__)("Content",'woocommerce'),initialOpen:!0},Object(c.createElement)(v.a,{settings:u,onChange:function(e){return o({contentVisibility:e})}})),Object(c.createElement)(y.PanelBody,{title:Object(i.__)("Filter by Product Category",'woocommerce'),initialOpen:!1},Object(c.createElement)(C.a,{selected:r,onChange:function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:[],t=e.map(function(e){return e.id});o({categories:t})},operator:n,onOperatorChange:function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"any";return o({catOperator:e})}})))}},{key:"render",value:function(){var e=this.props,t=e.attributes,o=e.name;return Object(c.createElement)(c.Fragment,null,this.getInspectorControls(),Object(c.createElement)(y.Disabled,null,Object(c.createElement)(_.ServerSideRender,{block:o,attributes:t})))}}]),t}(c.Component),E=o(46),S=o(36);function x(e,t){var o=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter(function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable})),o.push.apply(o,r)}return o}Object(s.registerBlockType)("woocommerce/product-best-sellers",{title:Object(i.__)("Best Selling Products",'woocommerce'),icon:{src:Object(c.createElement)(l.a,{icon:"stats-up-alt"}),foreground:"#96588a"},category:"woocommerce",keywords:[Object(i.__)("WooCommerce",'woocommerce')],description:Object(i.__)("Display a grid of your all-time best selling products.",'woocommerce'),supports:{align:["wide","full"],html:!1},attributes:function(e){for(var t=1;t<arguments.length;t++){var o=null!=arguments[t]?arguments[t]:{};t%2?x(o,!0).forEach(function(t){n()(e,t,o[t])}):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(o)):x(o).forEach(function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(o,t))})}return e}({},S.a),transforms:{from:[{type:"block",blocks:Object(u.without)(S.b,"woocommerce/product-best-sellers"),transform:function(e){return Object(s.createBlock)("woocommerce/product-best-sellers",e)}}]},deprecated:[{attributes:S.a,save:Object(E.a)("woocommerce/product-best-sellers")}],edit:function(e){return Object(c.createElement)(P,e)},save:function(){return null}})},61:function(e,t){!function(){e.exports=this.wp.dom}()},64:function(e,t){},65:function(e,t){},67:function(e,t){},68:function(e,t){}});
