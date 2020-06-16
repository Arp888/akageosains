$(document).on('ready', function () {
                          // initialization of pin map
                          var markers1 = {
                            0: {
                              "image_url": "themes/consulting/general-assets/img-temp/400x270/img1.jpg",
                              "date": "17:48, April 27, 2015",
                              "location": "South Africa",
                              "title": "Proin egestas purus eget1",
                              "coords": {
                                "lat": "149",
                                "long": "168"
                              }
                            },
                            1: {
                              "image_url": "themes/consulting/general-assets/img-temp/400x270/img2.jpg",
                              "date": "17:48, April 27, 2015",
                              "location": "South Africa",
                              "title": "Proin egestas purus eget2",
                              "coords": {
                                "lat": "179",
                                "long": "205"
                              }
                            },
                            2: {
                              "image_url": "themes/consulting/general-assets/img-temp/400x270/img3.jpg",
                              "date": "17:48, April 27, 2015",
                              "location": "South Africa",
                              "title": "Proin egestas purus eget3",
                              "coords": {
                                "lat": "241",
                                "long": "373"
                              }
                            },
                            3: {
                              "image_url": "themes/consulting/general-assets/img-temp/400x270/img4.jpg",
                              "date": "17:48, April 27, 2015",
                              "location": "South Africa",
                              "title": "Proin egestas purus eget4",
                              "coords": {
                                "lat": "543",
                                "long": "244"
                              }
                            },
                            4: {
                              "image_url": "themes/consulting/general-assets/img-temp/400x270/img5.jpg",
                              "date": "17:48, April 27, 2015",
                              "location": "South Africa",
                              "title": "Proin egestas purus eget5",
                              "coords": {
                                "lat": "601",
                                "long": "268"
                              }
                            },
                            5: {
                              "image_url": "themes/consulting/general-assets/img-temp/400x270/img6.jpg",
                              "date": "17:48, April 27, 2015",
                              "location": "South Africa",
                              "title": "Proin egestas purus eget6",
                              "coords": {
                                "lat": "636",
                                "long": "260"
                              }
                            },
                            6: {
                              "image_url": "themes/consulting/general-assets/img-temp/400x270/img7.jpg",
                              "date": "117:48, April 27, 2015",
                              "location": "South Africa",
                              "title": "Proin egestas purus eget7",
                              "coords": {
                                "lat": "614",
                                "long": "118"
                              }
                            },
                            7: {
                              "image_url": "themes/consulting/general-assets/img-temp/400x270/img8.jpg",
                              "date": "17:48, April 27, 2015",
                              "location": "South Africa",
                              "title": "Proin egestas purus eget8",
                              "coords": {
                                "lat": "701",
                                "long": "70.125"
                              }
                            },
                            8: {
                              "image_url": "themes/consulting/general-assets/img-temp/400x270/img17.jpg",
                              "date": "17:48, April 27, 2015",
                              "location": "South Africa",
                              "title": "Proin egestas purus eget9",
                              "coords": {
                                "lat": "950",
                                "long": "177"
                              }
                            },
                            9: {
                              "image_url": "themes/consulting/general-assets/img-temp/400x270/img15.jpg",
                              "date": "17:48, April 27, 2015",
                              "location": "South Africa",
                              "title": "Proin egestas purus eget10",
                              "coords": {
                                "lat": "1079",
                                "long": "463"
                              }
                            },
                            10: {
                              "image_url": "themes/consulting/general-assets/img-temp/400x270/img7.jpg",
                              "date": "17:48, April 27, 2015",
                              "location": "South Africa",
                              "title": "Proin egestas purus eget 11",
                              "coords": {
                                "lat": "717",
                                "long": "455"
                              }
                            },
                            11: {
                              "image_url": "themes/consulting/general-assets/img-temp/400x270/img5.jpg",
                              "date": "17:48, April 27, 2015",
                              "location": "South Africa",
                              "title": "Proin egestas purus eget 12",
                              "coords": {
                                "lat": "625",
                                "long": "510"
                              }
                            },
                            canvas: {
                              src: '../../assets/img/maps/map.svg',
                              width: 1170,
                              height: 594
                            }
                          };

                          $.HSCore.components.HSPinMap.init('.js-pin-map', {
                            data: {
                              "map-pin": markers1
                            }
                          });
                        });
