import './bootstrap';
import 'bootstrap/dist/js/bootstrap.min.js';


const marker = new google.maps.Marker({
    position: {
        lat: 28.625043,
        lng: 79.810135
    },
    label: { color: "white", text: "P4" },
    draggable: true,
    map
});
markers.push(marker);

const index = markers.findIndex(marker => marker.label.text == "P4");
if(index != -1) {
    markers[index].setOptions({ ...markers[index], position: { lat: 28.625043, lng: 79.810135 } });
}