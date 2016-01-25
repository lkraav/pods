<script type="text/template" id="file-upload-layout-template">
	<div class="pods-ui-list"></div>
	<div class="pods-ui-form"></div>
</script>

<script type="text/template" id="file-upload-item-template">
	<input
		name="<%- attr.name %>[<%- id %>][id]"
		data-name-clean="<%- attr.name_clean %>-id"
		id="<%- attr.id %>-<%- id %>-id"
		class="<%- attr.class %>"
		type="hidden"
		value="<%- id %>" />
	<ul class="pods-file-meta media-item">
		<% if ( 1 != options.file_limit ) { %>
			<li class="pods-file-col pods-file-handle">
				Handle
			</li>
		<% } %>
		<li class="pods-file-col pods-file-icon">
			<img class="pinkynail" src="<%- icon %>" alt="Icon">
		</li>
		<li class="pods-file-col pods-file-name">
			<% if ( 0 != options.file_edit_title ) { %>
				<input
					name="<%- attr.name %>[<%- id %>][title]"
					data-name-clean="<%- attr.name_clean %>-title"
					id="pods-form-ui-<%- attr.name_clean %>-<%- id %>-title"
					class="pods-form-ui-field-type-text pods-form-ui-field-name-<%- attr.name_clean %>-title"
					type="text"
					value="<%- name %>"
					tabindex="2"
					maxlength="255" />
			<% } else { %>
				<%- name %>
			<% } %>
		</li>
		<li class="pods-file-col pods-file-remove pods-file-delete">
			<a href="#remove">Remove</a>
		</li>
		<% if ( 0 != options.file_linked ) { %>
			<li class="pods-file-col pods-file-download"><a href="<%- link %>" target="_blank">Download</a></li>
		<% } %>
	</ul>
</script>

<script type="text/template" id="file-upload-form-template">
	<?php // @todo: Mark our button so it's distinguishable for testing purposes ?>
	<a class="button pods-file-add pods-media-add" href="#" tabindex="2" style="background-color: #f8bbbb;"><%= options.file_add_button %></a>
</script>