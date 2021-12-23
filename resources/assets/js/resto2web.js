require('./bootstrap')

//SWIPER
import Swiper from 'swiper';
// import Swiper styles
// core version + navigation, pagination modules:
import SwiperCore, {Navigation, Pagination} from 'swiper/core';
// configure Swiper to use modules
SwiperCore.use([Navigation, Pagination]);
window.Swiper = Swiper;

require('sticky-sidebar');

$(document).ready(function () {
    window.livewire.on('closeModal', () =>
    {
        $(".modal").modal('hide');
    });
})
