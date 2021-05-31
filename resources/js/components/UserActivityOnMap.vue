<template>
    <div id="map" ref="Map"></div>
</template>

<script>

import { Loader } from "@googlemaps/js-api-loader"
const loader = new Loader({
    apiKey: process.env.MIX_GOOGLE_MAP_API_KEY,
    version: "weekly",
});

export default {
    name: "UserActivityOnMap",
    data() {
        return {
            map: null
        }
    },
    props: {
        activities: {
            type: Array,
            default(){
                return []
            }
        },
    },
    mounted() {

        loader.load().then(() => {
           this.map = new google.maps.Map(document.getElementById("map"), {
                center: { lat: 51.508742, lng:  -0.120850},
                zoom: 8,
            });
            var bounds = new google.maps.LatLngBounds();

            for (const i in this.activities) {
                if (this.activities[i].location){
                    let marker = new google.maps.Marker({
                        position:{ lat: parseFloat(this.activities[i].location.latitude), lng: parseFloat(this.activities[i].location.longitude) },
                        map: this.map,
                    });

                    bounds.extend(marker.position);
                }
            }

            this.map.fitBounds(bounds);
        });
    }


}
</script>

<style scoped>
#map {
    height: 450px;
}
</style>
