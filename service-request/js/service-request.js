$(document).ready(function () {
	var isFinded = false,
		isDisableIcons = false,
		isDealersLoaded = false,
		mapLoaded = false,
		mapReady = false,
		currentDealer,
		currentSelectedDealer,
		currentDealerId,
		currentCity,
		currentCar,
		salutation = 'Mr.',
		changeZoomPlease = true,
		isDealerselected = false,
		isCarselected = false,
		isYearselected = false,
		isTypeselected = false,
		isCapacityselected = false,
		tempHeight,
		showMapTopOffset,
		dropDownMenu = $('.drop-it-down'),
		dropDownMenuItemFirst = $('.drop-it-down .dropdown-item.first'),
		dropDownMenuItemActive = $('.drop-it-down .dropdown-item.active'),
		clickedMenu,
		currentCity = $('#dropdown-dealercitylisting .dropdown-item.active').text();

	var mapObj = {
		initialize: function () {
			var self = this;
			this.latlng = undefined;
			this.markers = [];
			this.searchType = "city"; // dealer or city
			this.dealersArray = [];
			this.points = [];
			this.myMap = new ymaps.Map("map_canvas", {
				center: [55.753559, 37.609218],
				zoom: 8,
				controls: ['zoomControl']
			}, {
					suppressMapOpenBlock: true,
				});
			this.objectManager = new ymaps.ObjectManager({
				clusterize: false
			});

			this.getAllPoints(this.renderMarkers);
//			this._setMapCenterRussia();
			return this;
		},
		getAllPoints: function (callback) {
			var self = this;
			$.getJSON('https://www.hyundai.ru/request/getalldealers', function (data) {
				callback(data, self);
			})
			.done(function () {
				// map onLoad
				if (!mapLoaded) {
					$('.dropdown-item.active').trigger('click');

					if (currentDealerId) {
						isDealerselected = true;
						var currentDealerFr = currentDealer.toString().toLowerCase();
						currentDealerCity = currentDealerCity.toLowerCase();
						currentDealerCity = currentDealerCity.split(',');
						dealerCityCurrentFinded = currentDealerCity[0].replace('г. ', '');

						$('#dropdown-dealercitylisting .dropdown-item').each(function () {
							var self = this,
								searchValue = $(self).text().toString();
							searchValue = searchValue.toLowerCase();

							if (searchValue === 'москва и подмосковье') {
								searchValue = 'москва';
							};
							if (dealerCityCurrentFinded.indexOf(searchValue) != -1) {
								$(self).trigger('click');
							};
						});

						// А тут поиск дилера по ID
						$('#dropdown-dealerlisting .dropdown-item').each(function () {
							var self = this,
								popupselected = $(self).attr('data-id');
							if (popupselected == currentDealerId) {
								$(self).trigger('click');
							}
						});
						if (!isDealerselected) {
							$('#dropdown-dealerlisting').removeClass('isDealerselected');
						} else {
							$('#dropdown-dealerlisting').addClass('isDealerselected');
						}
					}
					else if (currentDealerName) {
						currentDealer = currentDealerName;
						isDealerselected = true;
						var currentDealerFr = currentDealer.toString().toLowerCase();
						currentDealerCity = currentDealerCity.toLowerCase();
						currentDealerCity = currentDealerCity.split(',');
						dealerCityCurrentFinded = currentDealerCity[0].replace('г. ', '');

						$('#dropdown-dealercitylisting .dropdown-item').each(function () {
							var self = this,
								searchValue = $(self).text().toString();
							searchValue = searchValue.toLowerCase();

							if (searchValue === 'москва и подмосковье') {
								searchValue = 'москва';
							};
							if (dealerCityCurrentFinded.indexOf(searchValue) != -1) {
								$(self).trigger('click');
							};
						});

						$('#dropdown-dealerlisting .dropdown-item').each(function () {
							var self = this,
								popupselected = $(self).text().toString().toLowerCase();
							if (popupselected == currentDealerFr) {
								$(self).trigger('click');
							}
						});
						if (!isDealerselected) {
							$('#dropdown-dealerlisting').removeClass('isDealerselected');
						} else {
							$('#dropdown-dealerlisting').addClass('isDealerselected');
						}
					}
					mapLoaded = true;
				}
			})
			.fail(function () {
				if (confirm("Something went wrong :(\n Let's try to reload this page.")) {
					location.reload(true);
				} else {
					return false;
				};
			});
		},

		renderMarkers: function (data, self) {
			var numPoint;
			var markerId = 0;
			self.dealersArray = data;

			for (pointNum in data) {
				let dp = data[pointNum];

				let pointImage = '/media/img/icon_df_map_dealer_hyundai_on_new.png';
				if (dp.special === '1') {
					pointImage = '/media/img/icon_df_map_dealer_special_on.png';
				}

				if (dp.id == 223) {
					pointImage = '/media/img/avilon.png';
				}

				var dealerCity = dp.address;
				dealerCity = dealerCity.split(',');
				dealerCity = dealerCity[0];

				dealerCity = dealerCity.toLowerCase();
				if (dealerCity === 'москва и подмосковье') {
					dealerCity = 'москва';
				};
				var specialClass = dp.special === '1' ? 'special' : '';
				var waClass = dp.wa === '1' ? 'wa' : '';
				var ratingClass = dp.rating === '1' ? 'rating' : '';

				var template = _.template($('#dealerTemplate').html(), {
					name: dp.name,
					address: dp.address,
					phone: dp.phone,
					site: '<a target="_blank" href="' + dp.site + '" >Перейти на сайт</a>',
					email: '<a href="mailto:' + dp.email + '">' + dp.email + '</a>',
					encodePhone: dp.encodePhone,
					city: dealerCity,
					special: specialClass,
					wa: waClass,
					id: dp.id,
					rating: ratingClass,
					code: dp.code
				});

				myBalloonContentLayout = ymaps.templateLayoutFactory.createClass(
					template
				);

				let point = {
					type: 'Feature',
					id: pointNum,
					geometry: {
						type: 'Point',
						coordinates: [dp.latitude, dp.longitude]
					},
					properties: {
						pointId: dp.id,
						hintContent: dp.name,
						address: dp.address,
						phone: dp.phone,
						site: dp.site,
						dealerId: dp.code,
						code: dp.code,
						balloonContent: 'Содержание балуна'
					},
					options: {
						iconLayout: 'default#image',
						iconImageHref: pointImage,
						hideIconOnBalloonOpen: false,
						balloonShadow: false,
						// balloonLayout: MyBalloonLayout,
						balloonContentLayout: myBalloonContentLayout,
						balloonMaxWidth: 220,
					}
				};


				self.points.push(point);
			}


			self.objectManager.add(self.points);
			self.myMap.geoObjects.add(self.objectManager);

			self.objectManager.events.add('click_', function (e) {
				var objectId = e.get('objectId');

				obj = self.objectManager.objects.getById(objectId);

				if (!obj) {
					obj = e.originalEvent;
				}


				//Если дилер найден, записываем информацию о нём

				var dealerTemplateInfo = _.template($('#dealerTemplateInfo').html(), {
					address: obj.properties.address,
					phone: obj.properties.phone,
					site: '<a target="_blank" href="' + obj.properties.site + '" >' + obj.properties.site + '</a>'
				});

				if (obj.properties.code !== "C40AF11027") {
					$('#selected-dealer').html(dealerTemplateInfo);
				}

				//открыть попап у точки
				self.objectManager.objects.each(function (item) {
					if (obj.properties.pointId == item.properties.pointId && item.properties.code !== "C40AF11027") {
						self.objectManager.objects.balloon.open(item.id);

						//Записываем выбранного дилера
						currentSelectedDealer = item.properties.dealerId;
						console.log(currentSelectedDealer);

					}
				})
			})
		},
		findDealers: function (searchValue, searchId) {
			var self = this,
				dealerNum,
				findedList = new Array();

			// Clear before paste
			if (self.searchType === 'city') {
				$('#dropdown-dealerlisting .nano .dropdown-list').html('');
			};

			// find it
			if (self.searchType === 'dealer') { // process dealer dropdown item click
				var findNum;
				isFinded = true;
				isDisableIcons = true;
				for (dealerNum in self.dealersArray) {
					var dealerName = self.dealersArray[dealerNum].name.toLowerCase();
					var dealerId = self.dealersArray[dealerNum].id;

					if (searchId > 0) {
						if (dealerId == searchId) {
							findedList.push({ dealer: self.dealersArray[dealerNum], num: dealerNum });
						}
					}
					else if (dealerName.indexOf(searchValue.toLowerCase()) != -1) {
						findedList.push({ dealer: self.dealersArray[dealerNum], num: dealerNum });
					}
				}
				for (findNum in findedList) {

				}
				isDisableIcons = false;

				if ('util' in ymaps) {
					if (findedList.length != 0) {
						if (self.objectManager.setFilter(function (object) { return findedList.some(function (obj) { return obj.dealer.id == object.properties.pointId }); })) {
							var obj = ymaps.util.bounds.getCenterAndZoom(self.objectManager.setFilter(function (object) {
								return findedList.some(function (obj) { return obj.dealer.id == object.properties.pointId });
							}).getBounds(), self.myMap.container.getSize());

							self.myMap.setCenter(obj.center, obj.zoom);

							//Чтобы с карты ну убирались точки вне целевого региона
							self.objectManager.setFilter(function (object) { return findedList.some(function (obj) { return true }); })
						}
					}

					if (findedList.length === 1) {
						self.myMap.setZoom(15);
					}
				}

				for (findNum in findedList) {
					var findItem = findedList[findNum];
					var target;

					//console.log(findItem);

					self.objectManager.objects.each(function (item) {
						if (findItem.dealer.id == item.properties.pointId) {
							target = item;
						}
					})

					self.objectManager.events.fire('click_', target);
				}

			} else { // or find dealers in selected location
				var findNum;
				isFinded = false;
				isDisableIcons = true;

				for (dealerNum in self.dealersArray) {
					var dealerCityId = self.dealersArray[dealerNum].city_id;
					if (typeof (searchValue) == 'string') {
						var findedCitiesList = searchValue.split(',');
						for (var i = 0; i < findedCitiesList.length; i++) {
							if (findedCitiesList[i] == dealerCityId) {
								findedList.push({ dealer: self.dealersArray[dealerNum], num: dealerNum });
							}
						}
					} else {
						if (searchValue == dealerCityId) {
							findedList.push({ dealer: self.dealersArray[dealerNum], num: dealerNum });
						}
					}
				}

				//Добавляем дилеров в список
				for (findNum in findedList) {
					var findItem = findedList[findNum];
					var $container = $('.dealerlistdropdown #dropdown-dealerlisting .nano .dropdown-list');
					var item = document.createElement('li');

					$(item).attr('data-id', findItem.dealer.id);
					$(item).html(findItem.dealer.name);
					$(item).addClass('dropdown-item');

					//оставляем только одного дилера белгород
					if(findItem.dealer.id !== "249"){
						continue;
					}

					//Всех кроме Hyundai City Store Авилон code: C40AF11027
					if (findItem.dealer.code !== "C40AF11027") {
						$container.append(item);
					}

					$("#dropdown-dealerlisting .nano").nanoScroller({
						alwaysVisible: true,
						sliderMinHeight: 45,
						sliderMaxHeight: 45,
						preventPageScrolling: true
					});
				}


				// sort result
				var $elements = $('.dealerlistdropdown #dropdown-dealerlisting .nano .dropdown-list .dropdown-item');
				var $target = $('.dealerlistdropdown #dropdown-dealerlisting .nano .dropdown-list');
				$elements.sort(function (a, b) {
					var an = $(a).text(),
						bn = $(b).text();
					if (an && bn) {
						return an.toUpperCase().localeCompare(bn.toUpperCase());
					}
					return 0;
				});
				$elements.detach().appendTo($target);

				isDisableIcons = false;

				if ('util' in ymaps) {
					if (findedList.length != 0) {
						if (self.objectManager.setFilter(function (object) { return findedList.some(function (obj) { return obj.dealer.id == object.properties.pointId }); })) {
							var obj = ymaps.util.bounds.getCenterAndZoom(self.objectManager.setFilter(function (object) {
								return findedList.some(function (obj) { return obj.dealer.id == object.properties.pointId });
							}).getBounds(), self.myMap.container.getSize());

							self.myMap.setCenter(obj.center, obj.zoom);

							//Чтобы с карты ну убирались точки вне целевого региона
							self.objectManager.setFilter(function (object) { return findedList.some(function (obj) { return true }); })
						}
					}

					if (findedList.length === 1) {
						self.myMap.setZoom(12);
					}
				}

			}

			if (isDealerselected) { $('.js-dealer-map-selector').text('Дилер выбран') }
		},

		_setMapCenterRussia: function () {
			var self = this;
			var setCity = function (city) {
				 /* Получаем ID города, после чего выделяем его */
				 $.post('https://www.hyundai.ru/requestnew/getcityru', 'en=' + city, function(res){
					  if(res.error == 0)
					  {
						   id = res.id;
						   $('#dropdown-dealercitylisting').find('.dropdown-item').each(function(){
							if($(this).data('value').length != 0)
							{
								 idlist = $(this).data('value').toString().split(',');

								 if(jQuery.inArray( id, idlist ) != -1)
								 {
									  $(this).trigger('click');
									 $(dropDownMenu).each( function () {
									 	$(dropDownMenu).removeClass('is-dropped');
									 });
								 }
							 }
						   });
					  }
				 }, 'json');
			};
			$.getJSON("http://ipinfo.io/json")
				 .done(function (json) {
					 if (!!json.city === false) {
						 json.city = "Moscow";
					 }
					 setCity(json.city);
				 })
				 .fail(function (jqxhr, textStatus, error) {
					 setCity('Moscow');
				 });
		}
	};

	ymaps.ready(mapObj.initialize.bind(mapObj));

// document functionality
//--------------------------------------------------------------------------------------
	// this mask was replaced with inputmask.bundle.js
	// so,

// 	// // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // //

//			DON'T FORGET TO REPLACE THIS + VIEW FILE + CONTROLLER DURING UPDATING PRODUCTION SERVER		  //

// 	// // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // // //

	$('#phone').inputmask("+7 (999) 999-99-99");
	$(document).on('click', '#phone', function () {
		phone.setSelectionRange(4,4);
		phone.focus();
	});


// dropdown slider plugin init
		 $("#dropdown-carlisting .nano").nanoScroller({
			 alwaysVisible: true,
			 sliderMinHeight: 45,
			 sliderMaxHeight: 45,
			 preventPageScrolling: true
		 });
		 $("#dropdown-dealercitylisting .nano").nanoScroller({
			 alwaysVisible: true,
			 sliderMinHeight: 45,
			 sliderMaxHeight: 45,
			 preventPageScrolling: true
		 });
		 $("#dropdown-dealerlisting .nano").nanoScroller({
			 alwaysVisible: true,
			 sliderMinHeight: 45,
			 sliderMaxHeight: 45,
			 preventPageScrolling: true
		 });
		 $("#dropdown-yearlisting .nano").nanoScroller({
			 alwaysVisible: true,
			 sliderMinHeight: 45,
			 sliderMaxHeight: 45,
			 preventPageScrolling: true
		 });
		 $("#dropdown-typelisting .nano").nanoScroller({
			 alwaysVisible: true,
			 sliderMinHeight: 45,
			 sliderMaxHeight: 45,
			 preventPageScrolling: true
		 });
		 $("#dropdown-capacitylisting .nano").nanoScroller({
			 alwaysVisible: true,
			 sliderMinHeight: 45,
			 sliderMaxHeight: 45,
			 preventPageScrolling: true
		 });

	if (!mapReady) {
		currentCity = $('#dropdown-dealercitylisting .dropdown-item.active').text();
		mapObj.searchType = 'city';
		mapObj.findDealers(currentCity);
		mapReady = true;
	};
// popups
	$(document).on('click', '.show-legal', function (e) {
		e.preventDefault();
		$('.legal-wrap').fadeIn();
	});
	$(document).on('click', '.show-map', function (e) {
		e.preventDefault();
		changeZoomPlease = true;
		$('.map-overlayed').fadeIn();
		$('.map_canvas_wrap').addClass('vis');

		if (isDealerselected) {
			var currentDealer = $('#dropdown-dealerlisting .dropdown-item.active').text();
			var currentDealerId = $('#dropdown-dealerlisting .dropdown-item.active').attr('data-id');
			mapObj.searchType = 'dealer';
			mapObj.findDealers(currentDealer, currentDealerId);
		} else {
 			currentCity = $('#dropdown-dealercitylisting .dropdown-item.active').data('value');
			mapObj.searchType = 'city';
			mapObj.findDealers(currentCity);
		};
	});
	$(document).on('click', '.test-drive-popup', function (e) {
		e.stopImmediatePropagation();
	});
// close popups
	$(document).on('click', '.map-overlayed', function (e) {
		e.preventDefault();
		$('.map-overlayed').fadeOut();
		$('.map_canvas_wrap').removeClass('vis');
	});
	$(document).on('click', '.closeMap', function (e) {
		e.preventDefault();
		$('.map-overlayed').fadeOut();
		$('.map_canvas_wrap').removeClass('vis');
	});
	$(document).on('click', '.closeIt', function (e) {
		e.preventDefault();
		$('.overlayed').fadeOut();
	});
	$(document).on('click', '.overlayed', function (e) {
		$('.overlayed').fadeOut();
	});
	$(document).keydown('click', function (e) {
		 keycode = e.keyCode;
		if (keycode == 27) {
			$('.overlayed').fadeOut();
		}
	});
	$('input').keydown('click', function (e) {
		 keycode = e.keyCode;
		if (keycode == 13) {
			$('.send-req').trigger('click');
		}
	});
	$('textarea').keydown('click', function (e) {
		 keycode = e.keyCode;
		if ((e.keyCode == 10 || e.keyCode == 13) && e.ctrlKey) {
			 e.preventDefault();
			$('.send-req').trigger('click');
		}
	});
// comment
/*
	$(document).on('click', '.add-comment', function (e) {
		e.preventDefault();
		$('.add-comment-wrap').stop().slideToggle();
	});
*/
//	   --------------------------------------------------------------------------
// dropdown listener
// exclude dealer list
	$(document).on('click', '.dropdown-item', function (event) {
		event.preventDefault();
		var dropDownMenuTarget = $( event.target ),
			self = dropDownMenuTarget,
			$this = $(this).parents('.drop-it-down');
		if ( $(event.target).is('.nano-slider') ) {
			return
		} else	{
			$('.dealerlistdropdown').removeClass('incorrect');
			$('.carlistdropdown').removeClass('incorrect');
			$('.yearlistdropdown').removeClass('incorrect');
			$('.typelistdropdown').removeClass('incorrect');
			$('.capacitylistdropdown').removeClass('incorrect');
			//$this.parent().removeClass('incorrect');
			if (mapLoaded) { // open droppers
				if ( $this.hasClass('is-dropped') ) {
					$this.trigger('focus');
					$this.removeClass('is-dropped');
					if ( self.is( $('#dropdown-dealerlisting *') ) ) {
						if (isDealerselected) {
							var currentDealer = $('#dropdown-dealerlisting .dropdown-item.active').text();
							$('#dropdown-dealerlisting .dropdown-item.first').removeClass('first-active').text(currentDealer);
						} else {
							$('#dropdown-dealerlisting .dropdown-item.first').addClass('first-active').text('Выберите дилера');
						};
					} else {
						var selector = self.parent().parent().parent();
						dropSelectAction(self, selector)
					}
				} else { // close droppers
					$(dropDownMenu).each( function () {
						$(dropDownMenu).removeClass('is-dropped');
					});
					$this.addClass('is-dropped');
				}
			}
		};
	});
// now replace with selected item
	var dropSelectAction = function (item, selector) {
		//clear
		if (item.hasClass('first')) {return false};
		selector.find( $('.dropdown-item') ).removeClass('active');
		 $(item).addClass('active')
		//update
		itemSelected = selector.find('.dropdown-item.active').text();
		selector.find('.dropdown-item.first').text(itemSelected);
	};

// body click listener
// closing droppers action
	$(document).on('mousedown', 'body', function (event) {
		var target = $( event.target ),
			dropDownMenuTarget = $('.is-dropped').find('*');
		if ( !target.is($(dropDownMenuTarget)) ) {
			$(dropDownMenu).each( function () {
				$(dropDownMenu).removeClass('is-dropped');
				if (dropDownMenuTarget = $('#dropdown-dealerlisting')) {
					if (isDealerselected) {
						var currentDealer = $('#dropdown-dealerlisting .dropdown-item.active').text();
						$('#dropdown-dealerlisting .dropdown-item.first').removeClass('first-active').text(currentDealer);
					} else {
						$('#dropdown-dealerlisting .dropdown-item.first').addClass('first-active').text('Выберите дилера');
					};
				};
			});
		}
	});
// location dropper listener
	$(document).on('click', '#dropdown-dealercitylisting .dropdown-item:not(.first,.divider)', function (e) {
		e.preventDefault();
		isDealerselected = false;
		// clear dealer selecting first
		$('#dropdown-dealerlisting .dropdown-item.first').addClass('first-active').text('Выберите дилера');
		$('.selected-dealer__wrap').removeClass('active');
		$('#dropdown-dealercitylisting .dropdown-item').each(function () {
			$(this).removeClass('active');
		});
		$(this).addClass('active');
		//update menu - selected:
		currentCity = $('#dropdown-dealercitylisting .dropdown-item.active').text();
		$('#dropdown-dealercitylisting .dropdown-item.first').text(currentCity);
		// clear dealer selecting
		$('#selected-dealer').html('');
		$('#dropdown-dealerlisting').removeClass('isDealerselected');
		$('.controls__wrap input').addClass('inactive');
		$('#dropdown-dealerlisting .dropdown-item').each(function () {
			$(this).removeClass('active');
		});

		searchValue = $('#dropdown-dealercitylisting .dropdown-item.active').data('value');

		currentDealer = '';
		mapObj.searchType = 'city';
		mapObj.findDealers(searchValue);
	});

// dealer dropper listener
	$(document).on('click', '#dropdown-dealerlisting .dropdown-item:not(.first,.divider)', function (e) {
		e.preventDefault();
		isDealerselected = true;
		$('.selected-dealer__wrap').addClass('active');

		$('#dropdown-dealerlisting .dropdown-item').each(function () {
			$(this).removeClass('active');
		});
		$(this).addClass('active');
		//update menu - selected:
		currentDealer = $('#dropdown-dealerlisting .dropdown-item.active').text();
		$('#dropdown-dealerlisting .dropdown-item.first').text(currentDealer);
		// dealerListTemp
		if (!isDealerselected) {
				$('#dropdown-dealerlisting').removeClass('isDealerselected');
				$('.controls__wrap input').addClass('inactive');
		} else {
				$('#dropdown-dealerlisting').addClass('isDealerselected');
				$('.controls__wrap input').removeClass('inactive');
		};
		// update map:
		mapObj.searchType = 'dealer';

		currentDealerId = $('#dropdown-dealerlisting .dropdown-item.active').data('id');

		$('#dropdown-dealerlisting .dropdown-item.first').attr('data-id', currentDealerId);

		mapObj.findDealers(currentDealer, currentDealerId);
	});

// select dealer on map listener
	$(document).on('click', '.js-dealer-map-selector', function(e) {
		e.preventDefault();
		isDealerselected = true;
		var currentDealerFromPopUp = $(this).data('name').toString().toLowerCase(),
		currentCityFromPopUp = $(this).data('address').toString().toLowerCase();

		$('#dropdown-dealercitylisting .dropdown-item').each(function () {
			var self = this,
			searchValue =  $(self).text().toString().toLowerCase(),
//			searchValue =	 $(self).data('value'),
			dealerCityCurrent = currentCityFromPopUp;
			searchValue = searchValue.toLowerCase();

			dealerCityCurrent = dealerCityCurrent.split(',');
			dealerCityCurrentFinded = dealerCityCurrent[0];
			if (dealerCityCurrentFinded.indexOf(searchValue) != -1) {
				changeZoomPlease = false;
				$(self).trigger('click');
			};
		});
		$('#dropdown-dealerlisting .dropdown-item').each(function () {
			var self = this,
			popupselected =	 $(self).text().toString().toLowerCase();
				if (popupselected == currentDealerFromPopUp) {
					changeZoomPlease = false;
					$(self).trigger('click');
				}
		});

		if (!isDealerselected) {
				$('#dropdown-dealerlisting').removeClass('isDealerselected');
				$('.controls__wrap input').addClass('inactive')
		} else {
				$('#dropdown-dealerlisting').addClass('isDealerselected');
				$('.controls__wrap input').removeClass('inactive')

			//Закрыть попап
			$('.map-overlayed').fadeOut();
			$('.map_canvas_wrap').removeClass('vis');
		};

		$(dropDownMenu).each( function () {
			$(dropDownMenu).removeClass('is-dropped');
		});
	});

	//model dropper listener
	$(document).on('click', '#dropdown-carlisting .dropdown-item:not(.first,.divider)', function (e) {
		e.preventDefault();
		isCarselected = true;

		$('#dropdown-carlisting .dropdown-item').each(function () {
			$(this).removeClass('active');
		});
		$(this).addClass('active');
		//update menu - selected:
		currentCar = $('#dropdown-carlisting .dropdown-item.active').text();
		$('#dropdown-carlisting .dropdown-item.first').text(currentCar);

		//Change item look
		$('#dropdown-carlisting').addClass('isCarselected');
	});
	//year dropper listener
	$(document).on('click', '#dropdown-yearlisting .dropdown-item:not(.first,.divider)', function (e) {
		e.preventDefault();
		isYearselected = true;

		$('#dropdown-yearlisting .dropdown-item').each(function () {
			$(this).removeClass('active');
		});
		$(this).addClass('active');
		//update menu - selected:
		currentCar = $('#dropdown-yearlisting .dropdown-item.active').text();
		$('#dropdown-yearlisting .dropdown-item.first').text(currentCar);

		//Change item look
		$('#dropdown-yearlisting').addClass('isYearselected');
	});
	//type dropper listener
	$(document).on('click', '#dropdown-typelisting .dropdown-item:not(.first,.divider)', function (e) {
		e.preventDefault();
		isTypeselected = true;

		$('#dropdown-typelisting .dropdown-item').each(function () {
			$(this).removeClass('active');
		});
		$(this).addClass('active');
		//update menu - selected:
		currentCar = $('#dropdown-typelisting .dropdown-item.active').text();
		$('#dropdown-typelisting .dropdown-item.first').text(currentCar);

		//Change item look
		$('#dropdown-typelisting').addClass('isTypeselected');
	});
	//capacity dropper listener
	$(document).on('click', '#dropdown-capacitylisting .dropdown-item:not(.first,.divider)', function (e) {
		e.preventDefault();
		isCapacityselected = true;

		$('#dropdown-capacitylisting .dropdown-item').each(function () {
			$(this).removeClass('active');
		});
		$(this).addClass('active');
		//update menu - selected:
		currentCar = $('#dropdown-capacitylisting .dropdown-item.active').text();
		$('#dropdown-capacitylisting .dropdown-item.first').text(currentCar);

		//Change item look
		$('#dropdown-capacitylisting').addClass('isCapacityselected');
	});

//city list hook
//it changes corrects dealer list order

	$('#dropdown-dealercitylisting').find('.dropdown-item').each(function(){
		if($(this).data('value').length != 0)
		{
			idlist = $(this).data('value').toString().split(',');
			id = '19';
			if(jQuery.inArray( id, idlist ) != -1)
			{
				 $(this).insertBefore('.dropdown-list.nano-content .dropdown-item.divider');
			}
		}
	});
	$('#dropdown-dealercitylisting .dropdown-item[data-value="17"]').insertBefore('.dropdown-list.nano-content .dropdown-item.divider');

// fix tab focusing
	$(document).on('focus blur mousedown', '.drop-it-down[tabindex]', function(e){
		e.preventDefault();
		if (!$(this).hasClass('is-dropped') && e.type === 'focusin') {
			$(this).find('.dropdown-item.first').trigger('click');
		} else if ($(this).hasClass('is-dropped') && e.type === 'focusout') {
			$(this).find('.dropdown-item.first').trigger('click');
		}
	});
	$('.dropdown-list.nano-content').each(function(){
		$(this).attr('tabindex', '-1');
	});

// validate form
$('.controls__wrap input').on('input', function() {
	if ($(this).is('[name*=name]')) {
		$(this).val($(this).val().capitalize());
	}
});

// submit processing
	$(document).on('click', '.send-req', function (e) {
		e.preventDefault();
		var $name = $('#name'),
			$surname = $('#surname'),
			$phone = $('#phone'),
			$email = $('#email'),
			$comment = $('textarea#сomment'),
			enginetype = $('#dropdown-typelisting .dropdown-item.first').text(),
			$mileage = $('#mileage'),
			$vin = $('#vin'),
			$agree = $('#agree_rules');

		if(!isCarselected)
		{
			$('.carlistdropdown').addClass('incorrect');
			return;
		}
/*
		if(!isYearselected)
		{
			$('.yearlistdropdown').addClass('incorrect');
			return;
		}
*/
/*
		if(!isCapacityselected)
		{
			$('.capacitylistdropdown').addClass('incorrect');
			return;
		}
*/

		if (currentDealer) {
			if ($name.val() == '') {
				$name.parent().addClass('incorrect')
				return;
			}
			if ($surname.val() == '') {
				$surname.parent().addClass('incorrect')
				return;
			}
			if ($phone.val() == '') {
				$phone.parent().addClass('incorrect')
				return;
			} else if ( $phone.val().indexOf('_') != -1 ) {
				$phone.parent().addClass('incorrect')
				return;
			}
			if ($email.val() == '') {
				$email.parent().addClass('incorrect')
				return;
			} else {
				var vEmail = /^[-._A-Za-z0-9]+@(?:[A-Za-z0-9][-A-Za-z0-9]+\.)+[A-Za-z]{2,6}/;
				var Email = $email.val();
				var firstName = vEmail.exec(Email);
				if (!firstName)
				{
					$email.parent().addClass('incorrect')
					return;
				}
			}
			if ($agree.is(':not(:checked)')) {
				$('.legal-info').addClass('incorrect')
				return;
			}
			if(!isTypeselected)
				enginetype = 'Не указано';
			if($mileage.val() == 'Пробег автомобиля')
				$mileage.val('Не указано');
/*
			if($vin.val() == 'VIN номер')
				$vin.val('Не указано');
*/
			if($comment.val() == '')
				$comment.val('Не указано');

			var modelCode = $('#dropdown-carlisting .dropdown-item.active').attr('data-model');
			if(modelCode == '')
				modelCode = $('#dropdown-carlisting .dropdown-item.active').text();

			$('.layout-black').show();

			delta = 1000;
			prgrss = 0;
			step = 3;
			respFlag = '';
			isResult = false;

			drawProcessSlow();

			yaCounter49157044.reachGoal('service_ok', false, function () {
				console.log('goal service_ok');
			});
			gtag('event', 'service_ok', {
				event_category : 'service_form',
				event_label : 'service'
			});

			$.post(
				'https://www.hyundai.ru/requestnew/ServiceRequestToCRM',
				{
					name: $name.val(),
					surname: $surname.val(),
					city: $('#dropdown-dealercitylisting .dropdown-item.active').text(),
					phone: $phone.val(),
					email: $email.val(),
					comment: $comment.val(),
					model: modelCode,
					model_year: $('#dropdown-yearlisting .dropdown-item.first').text(),
					model_engine_type: enginetype,
					//model_engine_capacity: $('#dropdown-capacitylisting .dropdown-item.first').text(),
					model_mileage: $mileage.val(),
					//model_vin: $vin.val(),
					dealer: currentSelectedDealer,
					dealername: $('#dropdown-dealerlisting').find('li.first').html(),
					salutation: $('input[name=mrOrms]:checked').val(),
					campaignCode: !!window.campaignCode,
				},
				function(response) {

					 isResult = true;
					 respFlag = response;
					 //$('.layout-black').hide();

					 //setTimeout('drawring()', 300);

/*
					if (response === 'Y') {

						$name.val(''),
						$surname.val(''),
						$phone.val(''),
						$email.val(''),
						$agree.prop('checked', false);

						//$('#test-drive-response .skyblue').text("Ваш запрос успешно отправлен");
						$('#test-drive-response h2').text("Запрос успешно отправлен");
						$('#test-drive-response .text').show();

						$('.response-wrap').fadeIn();
						setTimeout(function () {
							$('.response-wrap').fadeOut();
						}, 10000);



						//RuTarget
						var dataLayer = window.dataLayer || [];
						dataLayer.push({'event': 'thankYou'});
						//RuTarget

					} else {
						$('#test-drive-response .skyblue').text("Извините, сервис временно недоступен");
						$('#test-drive-response .text').hide();
						$('.response-wrap').fadeIn();
						setTimeout(function () {
							$('.response-wrap').fadeOut();
						}, 10000);
					}
*/
				}
			).fail(function(){
				 $('.layout-black').hide();
			});
		} else {
			$('.dealerlistdropdown').addClass('incorrect');
		};
	});
	$('.controls__wrap input').focus(function () {
		$(this).parent().removeClass('incorrect');
	});
	$('#agree_rules').change(function() {
		$('.legal-info').removeClass('incorrect');
	});

});

var delta = 1000;
var prgrss = 0;
var step = 3;
var respFlag = '';
var isResult = false;

function drawProcessSlow()
{
	prgrss += step;

	stage = prgrss / 100;
	progressRingDraw(stage);

	if(!isResult)
		setTimeout('drawProcessSlow()', delta);
	else
	{
		delta = 300;
		step = parseInt((99 - prgrss) / 5);
		setTimeout('drawProcessFast()', delta);
	}
}

function drawProcessFast()
{
	prgrss += step;

	if(prgrss > 100) prgrss = 100;

	stage = prgrss / 100;
	progressRingDraw(stage);

	if(prgrss < 100)
		setTimeout('drawProcessFast()', delta);
	else
	{
		setTimeout('showResult()', 500);
	}
}

function showResult()
{
	var $name = $('#name'),
		 $surname = $('#surname'),
		 $phone = $('#phone'),
		 $email = $('#email'),
		 $comment = $('textarea#сomment'),
/*
		 enginetype = $('#dropdown-typelisting .dropdown-item.first').text(),
		 $mileage = $('#mileage'),
		 $vin = $('#vin'),
*/
		 $agree = $('#agree_rules');

	$('.layout-black').hide();

	if (respFlag === 'Y') {

		$name.val(''),
		$surname.val(''),
		$phone.val(''),
		$email.val(''),
		$agree.prop('checked', false);

		//$('#test-drive-response .skyblue').text("Ваш запрос успешно отправлен");
		$('#test-drive-response h2').text("Запрос успешно отправлен");
		$('#test-drive-response .text').show();

		$('.response-wrap').fadeIn();
		setTimeout(function () {
			$('.response-wrap').fadeOut();
		}, 10000);


		/*
dataLayer2.push({
			'countrycode': 'RU',
			'pagename': 'confirmationservicerequest',
			'carmodelname': testDrive.model
		});
*/

		//RuTarget
		var _rutarget = window._rutarget || [];
		_rutarget.push({'event': 'thankYou', 'conv_id': 'service'});
		//RuTarget

	} else {
		$('#test-drive-response .skyblue').text("Извините, сервис временно недоступен");
		$('#test-drive-response .text').hide();
		$('.response-wrap').fadeIn();
		setTimeout(function () {
			$('.response-wrap').fadeOut();
		}, 10000);
	}

	delta = 1000;
	prgrss = 0;
	step = 3;
	respFlag = '';
	isResult = false;
}