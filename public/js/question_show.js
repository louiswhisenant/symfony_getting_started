const voteButtons = document.querySelectorAll('.vote-button');

voteButtons.forEach((button) => {
	button.addEventListener('click', (e) => {
		e.preventDefault();

		let voteTotal = button.parentElement.querySelector('.js-vote-total');

		let xhr = new XMLHttpRequest();

		xhr.open('POST', `/comments/10/vote/${button.dataset.direction}`, true);

		xhr.setRequestHeader('Content-Type', 'application/json');

		xhr.onreadystatechange = function () {
			if (
				this.readyState === XMLHttpRequest.DONE &&
				this.status === 200
			) {
				const response = JSON.parse(xhr.responseText);
				voteTotal.innerHTML = response.votes;
			}
		};
		xhr.send(null);
	});
});

// var $container = $('.js-vote-arrows');
// $container.find('a').on('click', function (e) {
// 	e.preventDefault();
// 	var $link = $(e.currentTarget);
// 	$.ajax({
// 		url: '/comments/10/vote/' + $link.data('direction'),
// 		method: 'POST',
// 	}).then(function (data) {
// 		$container.find('.js-vote-total').text(data.votes);
// 	});
// });
