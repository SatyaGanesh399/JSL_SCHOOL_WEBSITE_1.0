const get_videos = async (id) => {
	let html = '', video_class, title_class;
	const video_data = await fetch('data/gallery-videos.json').then(res => {
		return res.json();
	});
	for (let i = 0; i < video_data.length; i++) {
		const el = video_data[i];
		console.log(el.video);
		if (i % 2 == 0) {
			video_class = 'order-0';
			title_class = 'order-1';
		} else {
			video_class = 'order-1';
			title_class = 'order-0';
		}
		html += '<div class="row align-items-center">';
		html += '<div class="mb-4 mb-lg-5 col-md-7 col-sm-6 col-12 ' + video_class + '">';
		html += '<div class="embed-responsive embed-responsive-16by9">';
		html += '<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/' + el.video + '?rel=0" allowfullscreen></iframe>';
		html += '</div>';
		html += '</div>';
		html += '<div class="mb-4 mb-lg-5 col-md-5 col-sm-6 col-12 ' + title_class + '">';
		html += '<h4 class="text-primary">' + el.title + '</h4>';
		html += '</div>';
		html += '</div>';
	}
	document.querySelector(id).innerHTML = html;
}