// JavaScript Document
$(document).ready(function() {
				$('input:checkbox:not([safari])').checkbox();
				$('input[safari]:checkbox').checkbox({cls:'jquery-safari-checkbox'});
				$('input:radio').checkbox();
			});

			displayForm = function (elementId)
			{
				var content = [];
				$('#' + elementId + ' input').each(function(){
					var el = $(this);
					if ( (el.attr('type').toLowerCase() == 'radio'))
					{
						if ( this.checked )
							content.push([
								'"', el.attr('name'), '": ',
								'value="', ( this.value ), '"',
								( this.disabled ? ', disabled' : '' )
							].join(''));
					}
					else
						content.push([
							'"', el.attr('name'), '": ',
							( this.checked ? 'checked' : 'not checked' ), 
							( this.disabled ? ', disabled' : '' )
						].join(''));
				});
				alert(content.join('\n'));
			}
			
			changeStyle = function(skin)
			{
				jQuery('#myform :checkbox').checkbox((skin ? {cls: skin} : {}));
			}
			