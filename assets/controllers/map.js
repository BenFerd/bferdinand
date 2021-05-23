mapboxgl.accessToken =
  "pk.eyJ1IjoiYmZlcmRpbmFuZGRldiIsImEiOiJja3AxM3J4bXcxMHZ3MnZueGYzdnA3ODV0In0.1es30PcEYAmiMhuCcyF07g";
var map = new mapboxgl.Map({
  container: "map", // container ID
  style: "mapbox://styles/mapbox/streets-v11", // style URL
  center: [4.4957, 50.48], // starting position [lng, lat]
  zoom: 9, // starting zoom
});

let marker = new mapboxgl.Marker({ color: "#ff8c00" })
  .setLngLat([4.49462, 50.48425])
  .addTo(map);
