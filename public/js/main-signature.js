! function(e) {
	"use strict";
	/**
	 * [app description]
	 * @type {Object}
	 */
	const app = {

		load: function() {
			this.modal();
			this.events();
			this.cart();
			this.removeCart();
			this.pageLoaderEvent();
		},
		/**
		 * [modal description]
		 * @return {[type]} [description]
		 */
		modal: function() {
			let that = this;
			$('#category-form').on('click', function(e) {
				let data = $('#title-modal');
				if (data.val() === '') {
					data.focus();
					return false;
				} else {
					let dataString = {title: data.val()};
					console.log(dataString)
					const route = '/dashboard/category';
					let config = {
						route: route,
						data: dataString,
						method: 'post',
						contentType: 'json',
						processData: true
					};
					
					that.http(config).then(function(response) {
						if(response.title !== '') {
							alert('Added Successfully !');
							window.location.reload();
						} else {
							alert('Error Occured while processing data');
						}
					}).catch(function(err) {
						console.log(err)
					})
				}
			});
		},
		/**
		 * [http description]
		 * @param  {[type]} config [description]
		 * @return {[type]}        [description]
		 */
		http: function(config) {
			if (!config.route) return alert('Url is requird')
			return $.ajax({
				url: config.route,
				data: config.data,
				method: config.method,
				contentType: config.contentType,
				cache: false,
				processData: config.processData,
				headers: {
				   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			})
		},
		/**
		 * Contain events
		 * @return {[type]} [description]
		 */
		events: function() {
			let that = this;
			$('#fileupload-multiple').click(function() {
				$('#upload').click();
			});

			$('#upload').change(function() {

				$('#product-preview').html('<i>please wait...</i>');
				$('#img-preview').hide();
				let formdata = new FormData();

			    if($(this).prop('files').length > 0)
			    {
			        let file = $(this).prop('files')[0];
			        formdata.append("upload", file);
			    }

				const config = {
					route: '/dashboard/ajax-product',
					data: formdata,
					method: 'post',
					contentType: false,
					processData: false
				};

				that.http(config).done(function(response) {
					if (response.trim() !== '') {
						$('#product-preview').html(`<img src="${response}"/>`);
					}
				}).fail(function(err) {
					console.log(err)
				})
			});
		},
		cart: function() {
			let that = this;
			$('#btn-cart').on('click', function() {
				let txt = $('#qty');
				if ((txt.val() == '') || (txt.val() < 0) ) {
					txt.focus();
					return false;
				} else {
	
					let id = $('#pID').val();
					let qty = $('#qty').val();
					const route = `/add-cart?id=${id}&qty=${qty}`;
					let dataString = {id: id, qty: qty};
					// console.log(dataString);
					let config = {
						route: route,
						data: dataString,
						method: 'post',
						contentType: 'json',
						processData: true,
					};
					that.http(config).done(function(response) {
						if (response.trim() === 'added') {
							window.location = '/cart';
						} else {
							alert('Error Occured !');
						}
					}).fail(function(er) {
						console.log(er)
					})
				}
			});
		},

		removeCart: function() {
			let that = this;
			$('#clear-cart').on('click', function() {
				const route = '/clear-cart';
				let config = {
						route: route,
						data: {data: 'data'},
						method: 'post',
						contentType: 'json',
						processData: true,
					};
					that.http(config).done(function(response) {
						if (response.trim() === 'success') {
							window.location.reload();
						} else {
							alert('Error Clearing Cart');
						}
					}).fail(function(er) {
						console.log(er)
					})
			})
		},

		dashboard: function() {
			let newPage = $(`#welcome`).html();
			$('#page-loader').html(newPage);
			$('#quick-menu a').on('click', function(e) {
				let elem = $(this).attr('data-rel');
				let newPage = $(`.${elem}`).html();
				$('#page-loader').html(newPage);
			});
		},

		pageLoaderEvent: function() {
			let that = this;
			$('#generate').click(function() {
				let amt = $('#amount');
				if (amt.val() === '') {
					amt.focus();
					return false;
				} else {
				
					let route = `/account/generate`;
					let config = {
						route: route,
						data: {'amount': amt.val()},
						method: 'get',
						contentType: 'json',
						processData: true,
					};
					// console.log(config);
					that.http(config).done(function(res){
						if (res.hasOwnProperty('customer_id')) {
							window.alert('Account Funded Successfully');
							window.location.reload();
						} else {
							window.alert('Error Occured ');
						}
					}).fail(function(err){
						console.log(err)
					})
				}
			})
		}
	};

	$(function() {
		/**
		 *  Root app init
		 */
		return app.load();
	})
}($);