
const mapNode = document.querySelector('div.event-map')
const mapData = JSON.parse(mapNode.getAttribute('data-json'))
mapNode.removeAttribute('data-json')

let eventMap
let eventMapMarker
let position = {
  lat: parseFloat(mapData.latitude),
  lng: parseFloat(mapData.longitude)
}

function initEventMap() {

  eventMap = new google.maps.Map(mapNode, {
    center: position,
    zoom: parseInt(mapData.zoom_level),
    mapTypeControl: false,
    scaleControl: false,
    rotateControl: false,
    fullscreenControl: false,
    streetViewControl: false
  })

  eventMapMarker = new google.maps.Marker({
    position: position,
    map: eventMap
  })
}

// Append Google Maps JavaScript API dynamically.
const gmapScript = document.createElement('script')
gmapScript.src = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDU3-i_wURd0YhAGROFHbZJzJUQ_kC8tnM&callback=initEventMap'
gmapScript.defer = true
gmapScript.async = true
document.querySelector('footer div:not(.container)').appendChild(gmapScript)
