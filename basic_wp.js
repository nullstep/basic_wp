// theme admin script

jQuery(function($) {
	// config
	const id = 'basic_wp';
	var theme = basic_wp;
	const fields = [
		'container_class',
		'header_order',
		'excerpt_length',
		'woo_support',
		'woo_per_page',
		'woo_columns',
		'editor_width',
		'favicon_image',
		'logo_image_normal',
		'logo_image_contrast',
		'latest_images',
		'nav_logo',
		'nav_width',
		'nav_layout',
		'nav_nav_align',
		'nav_logo_align',
		'nav_search_align',
		'nav_shadow',
		'sticky_nav',
		'nav_mobile',
		'page_colour',
		'text_colour',
		'heading_colour',
		'info_colour',
		'info_text_colour',
		'nav_colour',
		'nav_text_colour',
		'banner_colour',
		'banner_text_colour',
		'footer_top_colour',
		'footer_colour',
		'footer_text_colour',
		'primary_colour',
		'secondary_colour',
		'tertiary_colour',
		'quaternary_colour',
		'light_colour',
		'dark_colour',
		'admin_link_colour',
		'admin_highlight_colour',
		'google_api',
		'heading_font',
		'nav_font',
		'body_font',
		'mono_font',
		'font_awesome',
		'theme_css',
		'theme_js'
	];
	const editors = [
		'theme_css',
		'theme_js'
	];
	// let's go
	var cm = [];
	$('#' + id + '-form .tab-content .' + id + '-tab').eq(0).show();
	$('#' + id + '-form .nav-tab').eq(0).addClass('nav-tab-active');
	$('#' + id + '-nav a').on('click', function(e) {
		e.preventDefault();
		$('#' + id + '-nav a').removeClass('nav-tab-active');
		var tab = $(this).attr('href');
		$('.' + id + '-tab').hide();
		$(this).addClass('nav-tab-active');
		$(tab).show();
		if ($(tab).find('.code').length) {
			cm.forEach(function(item, index, arr) {
				item.codemirror.refresh();
			});
		}
	});
	$.ajax({
		method: 'GET',
		url: theme.api.url,
		beforeSend: function(xhr) {
			xhr.setRequestHeader('X-WP-Nonce', theme.api.nonce);
		}
	})
	.then(function(r) {
		fields.forEach(function(item, index) {
			if (r.hasOwnProperty(item)) {
				var i = $('#' + item);
				i.val(r[item]);
				if (i.is(':checkbox')) {
					if (r[item] == 'yes') {
						i.prop('checked', true);
						console.log('checkbox yes');
					}
					else {
						console.log('checkbox no');
					}
				}
				if (r[item][0] == '#') {
					i.parent().find('[data-id="' + item + '"]').val(r[item]);
				}
			}
			cm.forEach(function(item, index, arr) {
				item.codemirror.setValue($('#' + editors[index]).val());
			});
		});
	});
	editors.forEach(function(item, index, arr) {
		var eid = $('#' + item);
		if (eid.length) {
			var es = wp.codeEditor.defaultSettings ? _.clone(wp.codeEditor.defaultSettings) : {};
			es.codemirror = _.extend(
				{},
				es.codemirror, {
					indentUnit: 2,
					tabSize: 2,
					mode: 'css'
				}
			);
			var editor = wp.codeEditor.initialize(item, es);
			cm.push(editor);
			editor.codemirror.on('change', function(cMirror) {
				editor.codemirror.save();
				eid.change();
			});
		}
	});
	$('#' + id + '-form').on('submit', function(e) {
		e.preventDefault();
		cm.forEach(function(item, index, arr) {
			item.codemirror.save();
		});
		$('#submit').text('...').attr('disabled', 'disabled');
		var data = {};
		fields.forEach(function(item, index) {
			var i = $('#' + item);
			if (i.is(':checkbox')) {
				data[item] = (i.prop('checked')) ? 'yes' : '';
			}
			else {
				data[item] = i.val();
			}
		});
		$.ajax({
			method: 'POST',
			url: theme.api.url,
			beforeSend: function (xhr) {
				xhr.setRequestHeader('X-WP-Nonce', theme.api.nonce);
			},
			data: data
		})
		.then(function(r) {
			$('#' + id + '-feedback').html('<p>' + theme.strings.saved + '</p>').show().delay(3000).fadeOut();
			$('#submit').removeAttr('disabled');
			fields.forEach(function(item, index) {
				if (r.hasOwnProperty(item)) {
					$('#' + item).val(r[item]);
				}
			});
		})
		.fail(function(r) {
			var message = theme.strings.error;
			if (r.hasOwnProperty('message')) {
				message = r.message;
			}
			$('#submit').removeAttr('disabled');
			$('#' + id + '-feedback').html('<p>' + message + '</p>').show().delay(3000).fadeOut();
		});
	});
	var mediaUploader, bid;
	$('.choose-file-button').on('click', function(e) {
		bid = '#' + $(this).data('id');
		e.preventDefault();
		if (mediaUploader) {
			mediaUploader.open();
			return;
		}
		mediaUploader = wp.media.frames.file_frame = wp.media({
			title: 'Choose File',
			button: {
				text: 'Choose File'
			}, multiple: false
		});
		wp.media.frame.on('open', function() {
			if (wp.media.frame.content.get() !== null) {          
				wp.media.frame.content.get().collection._requery(true);
				wp.media.frame.content.get().options.selection.reset();
			}
		}, this);
		mediaUploader.on('select', function() {
			var attachment = mediaUploader.state().get('selection').first().toJSON();
			$(bid).val(attachment.url.split('/').pop());
		});
		mediaUploader.open();
	});
	$('.choose-colour-button').on('change', function() {
		bid = '#' + $(this).data('id');
		$(bid).val($(this).val());
	});
});

// EOF