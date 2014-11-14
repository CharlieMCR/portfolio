$(document).ready(function(){
	var windowHeight = $(window).height();
	$('header').css('height', windowHeight);

$('#main-content').css('minHeight', windowHeight);
	$('.header-content').delay(500).animate({opacity:'1'},500, 'easeOutQuint');
	
	$('.btn-build').click(function(){
		ga('send', 'event', 'button', 'click', 'btn-build');
		var controlsTop = $('.controls').offset().top;
		$('html, body').animate({
        scrollTop: controlsTop
        }, 800, 'easeOutQuint');
    $(this).blur();
	});
	
	$(function(){

    var colValue = $('#num-cols-val');
    var containerValue = $('#container-width-val');
    var gutterValue = $('#gutter-width-val');
    var paddingValue = $('#col-padding-val');
    var columnWrapper = $('#prev-col-wrap');
    var numColumns;
    var columnWidth;
    var colPadding = 0;
    var gutterWidth = 1.25;
    var numGutters;
    var totalGutterWidth;
    var containerWidth;
    var toggleVal = false;
    var paddingFlag;
    var colWidthCheck;
    var colBorderCheck;

    $('#num-cols').change(function(){
        colValue.html(this.value);
        $(columnWrapper).empty();
        numColumns = Number(this.value);
        columnWidth = 100/numColumns;
        columnWidth = columnWidth.toFixed(4);
/*         numGutters = numColumns - 1; */
/*         totalGutterWidth = gutterWidth * numGutters; */
/*         columnWidth = 100-totalGutterWidth; */
/*         columnWidth = columnWidth/numColumns; */
/*         columnWidth = columnWidth.toFixed(4); */
/*         colValue.append(' numGutters: '+numGutters+' totalGutterWidth: '+totalGutterWidth+' columnWidth: '+columnWidth+' gutterWidth: '+gutterWidth); */
/*         colValue.append(' numGutters: '+numGutters+' totalGutterWidth: '+totalGutterWidth+' columnWidth: '+columnWidth+' gutterWidth: '+gutterWidth); */
/*         $('.s1').css('width', columnWidth.'%'); */
/*         $(columnWrapper).html(gutterWidth); */
					$(columnWrapper).css('marginLeft', -gutterWidth+'em');
        for ( var i = 0; i < numColumns; i++ ) {
        	$(columnWrapper).append('<div class="col s1" style="width:'+columnWidth+'%; border-left:'+gutterWidth+'em solid transparent; padding:'+colPadding+'em"><div class="preview-padding"></div></div>');
        }
        
        paddingCheck();
        
    });

    // Trigger the event on load, so
    // the value field is populated:

    $('#num-cols').change();
    
    $('#set-container-width').change(function(){
        containerValue.html(this.value+'%');
        containerWidth = this.value;
        $('#prev-col-wrap').css('width', containerWidth+'%');
        paddingCheck();
        
    });
		
		$('#set-container-width').change();
		
		$('#set-gutter-width').change(function(){
        gutterValue.html(this.value+'em');
        gutterWidth = this.value;
        totalGutterWidth = gutterWidth * numGutters;
/*         columnWidth = 100-totalGutterWidth; */
/*         columnWidth = columnWidth/numColumns; */
/*         columnWidth = columnWidth.toFixed(4); */
        $('.col').css({'borderLeft': gutterWidth+'em solid transparent'});
        $(columnWrapper).css('marginLeft', -gutterWidth+'em');
        paddingCheck();
/*         gutterValue.append(' numGutters: '+numGutters+' totalGutterWidth: '+totalGutterWidth+' columnWidth: '+columnWidth); */
        
    });
    
    $('#set-col-padding').change(function(){
        paddingValue.html(this.value+'em');
        colPadding = this.value;
        $('.col').css({'padding': colPadding+'em'});
        paddingCheck();
        
/*         gutterValue.append(' numGutters: '+numGutters+' totalGutterWidth: '+totalGutterWidth+' columnWidth: '+columnWidth); */
        
    });
		
/* 		$('#set-gutter-width').change(); */
		
		$('.toggle').click(function(){
			
			
			if (toggleVal) {
				$(this).addClass('toggleOff').removeClass('toggleOn');
				$(this).next().find('.set-slider').prop('disabled', true).addClass('sliderOff');
				if (containerWidth != 90){
					$('#prev-col-wrap').animate({width: '90%'},200);
				}
				
			}
			else {
				$(this).addClass('toggleOn').removeClass('toggleOff');
				$(this).next().find('.set-slider').prop('disabled', false).removeClass('sliderOff');
				if (containerWidth != 90){
					$('#prev-col-wrap').animate({width: containerWidth+'%'},200);
				}
				
			}
			
			toggleVal = !toggleVal;
		});
		
		function paddingCheck() {
			paddingFlag = colPadding*16*2;
			paddingFlag = Math.ceil(paddingFlag);
      colWidthCheck = $('.col').css('width');
      colBorderCheck = $('.col').css('border-left-width'); 
      colBorderCheck = parseInt(colBorderCheck);
      colWidthCheck = parseInt(colWidthCheck);
      colWidthCheck = colWidthCheck - colBorderCheck;
      $('.foo').html(paddingFlag+' - '+colWidthCheck+'<br>');
      if (paddingFlag == colWidthCheck || paddingFlag > colWidthCheck) {
        $('.padding-flag').css('display', 'block');
      }
      
      else {
	      $('.padding-flag').css('display', 'none');
      }
		}
		
		$( window ).resize(function() {
			paddingCheck();
		});
		
		function getCode(gutter, columns, padding){
	 	var ifPadding = "";
	 	var spanCheck;
	 	var spanSize;
	 	var colSize = 100/columns;
	 	var totalGutter = gutter*(columns-1);
	 	var totalColumn = 100-totalGutter;
	 	if ( padding > 0) {
		 	ifPadding = "\r\tpadding: "+padding+"em;";
	 	}
	 	$('#code-col').empty();
	 	$('#code-spans').empty();
	 	$('#code-sec').empty();
	 	$('#code-sec').html("\r\tmargin-left: -"+gutter+"em;");
		$('#code-col').html("\r\tmargin: 0 0 "+gutter+"em 0;\r\tborder-left: "+gutter+"em solid transparent;"+ifPadding);
		for ( var i = 1; i < columns+1; i++ ) {
/* 			spanSize = (i*width)+((i-1)*gutter); */
/* 				spanSize = ((i/columns)*totalColumn)+(gutter*(i-1)); */
/* 				spanSize = spanSize.toFixed(5); */
				spanSize = i*colSize;
				spanCheck = spanSize.toFixed(5);
				spanSize = spanSize.toFixed(2);
				spanCheck = spanSize - spanCheck;
				if (spanCheck > 0) {
					spanSize = spanSize - 0.01;
				}
				spanSize = new Number(spanSize);
				spanSize = spanSize.toFixed(2);
				spanSize = new Number(spanSize).toString();
			$('#code-spans').append("\n\n\t.s"+i+"{ width: "+spanSize+"%; }");
		}
	 }
	 
	 $('.generate').click(function(){
	 	 ga('send', 'event', 'button', 'click', 'btn-generate');
		 $('#output-content').css('minHeight', windowHeight);
		 getCode(gutterWidth, numColumns, colPadding);
		 $('#css-container').css('display','block');
		 $('#usage-container').css('display','block');
		 $('html, body').animate({
        scrollTop: $(this).offset().top-20
        }, 800, 'easeOutQuint');
     $('#css-wrap').animate({left: '0'},800, 'easeOutQuint');
     $('#usage-wrap').animate({right: '0'},800, 'easeOutQuint');
		 $(this).blur();
	 });
	 
	 $('.btn-usage').click(function(){
		 $('#output-content').css('minHeight', windowHeight);
		 $('#usage-container').css('display','block');
		 $('html, body').animate({
        scrollTop: $(this).offset().top-20
        }, 800, 'easeOutQuint');
     $('#usage-wrap').animate({right: '0'},800, 'easeOutQuint');
		 $(this).blur();
	 });
	 

	});
	
	
	 $(function() {
	   var el, newPoint, newPlace, offset, spanWidth;
	   $("input[type='range']").change(function() {
	     el = $(this);
	     width = el.width();
	     spanWidth = $(".input-val").width();
	     if (el.attr("min")==0){
		     newPoint = (el.val()) / (el.attr("max"));
	     }
	     else {
	     	newPoint = (el.val()-1) / (el.attr("max")-1);
	     }
	     offset = (40*newPoint)+((spanWidth-40)/2);
	     newPlace = newPoint*width+1;
	     el
	       .next(".input-val")
	       .css({
	         left: newPlace,
	         marginLeft: -offset
	       })     
	   })
	   .trigger('change');
	 });
	 
	 function selectText(element) {
    var doc = document
        , text = doc.getElementById(element)
        , range, selection
    ;    
    if (doc.body.createTextRange) { //ms
        range = doc.body.createTextRange();
        range.moveToElementText(text);
        range.select();
    } else if (window.getSelection) { //all others
        selection = window.getSelection();        
        range = doc.createRange();
        range.selectNodeContents(text);
        selection.removeAllRanges();
        selection.addRange(range);
    }
		}
		
	 $('.output-code').click(function(){
		 var selectable = $(this).find('code');
		 selectable = selectable.attr('id');
		 selectText(selectable);
	 });
	 
	 /*
$('.output-code').hover(
	 function(){
		 $('body').addClass('code-hover');
	 }, function(){
		 $('body').removeClass('code-hover');
	 });
*/
	
		
	 
	 
		
	
});
