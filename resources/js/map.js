import {Loader} from 'google-maps';


const options = {
    'region': 'GB'
};
const loader = new Loader('AIzaSyBmJfTc7WkzqLGGUIPndTYciPno4jclq7E', options);




loader.load().then(function (google) {
    let map = new google.maps.Map(document.getElementById('map'), {
        zoom: 5,
        center: { lat: 54.597528, lng: -4.0539551 },
        // restriction: {
        //     latLngBounds: {
        //         east:  24.111384999999927,
        //         north: 54.83666,
        //         south: 49.002914,
        //         west: 14.149166000000037
        //     },
        //     strictBounds: true
        // },
        // scaleControl: true
    });
});
