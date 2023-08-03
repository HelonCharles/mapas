let locaisEspeciais = ["Marco central de Boa Vista", "Palácio", "AL-RR", "TJ-RR", "Catedral"];
        let area = [170, 1815, 6107, 1467, 1975];
        let earthquakeMarker1 = L.marker([2.820723, -60.672418]);
        map.addLayer(earthquakeMarker1);
        let earthquakeMarker2 = L.marker([2.821054,-60.672853]);
        map.addLayer(earthquakeMarker2);
        let earthquakeMarker3 = L.marker([2.821629, -60.671578]);
        map.addLayer(earthquakeMarker3);
        let earthquakeMarker4 = L.marker([2.822845,-60.671793]);
        map.addLayer(earthquakeMarker4);
        let earthquakeMarker5 = L.marker([2.819643,-60.673310]);
        map.addLayer(earthquakeMarker5);

//segunda parte

        earthquakeMarker1.bindPopup("<b>Locais Especiais:</b> " + locaisEspeciais[0] + "<br><b>Área:</b> " + area[0]);
        earthquakeMarker2.bindPopup("<b>Locais Especiais:</b> " + locaisEspeciais[1] + "<br><b>Área:</b> " + area[1]);
        earthquakeMarker3.bindPopup("<b>Locais Especiais:</b> " + locaisEspeciais[2] + "<br><b>Área:</b> " + area[2]);
        earthquakeMarker4.bindPopup("<b>Locais Especiais:</b> " + locaisEspeciais[3] + "<br><b>Área:</b> " + area[3]);
        earthquakeMarker5.bindPopup("<b>Locais Especiais:</b> " + locaisEspeciais[4] + "<br><b>Área:</b> " + area[4]);

function removeMap(mapa1, mapa2, mapa3) {
    console.log(mapa1);
    console.log(mapa2);
    console.log(mapa3);
    if(map.hasLayer(mapa1)){
        map.removeLayer(mapa1);
    }else{
        map.removeLayer(mapa2);
        map.removeLayer(mapa3);
        map.addLayer(mapa1);
    }
}

function removeEarthquakeMarker(earthquakeMarker1) {

    if(map.hasLayer(earthquakeMarker1)) {
        map.removeLayer(earthquakeMarker1);
    }else{
        map.addLayer(earthquakeMarker1);
    }
}
function removeEarthquakeMarker(earthquakeMarker2) {
    if(map.hasLayer(earthquakeMarker2)) {
        map.removeLayer(earthquakeMarker2);
    }else{
        map.addLayer(earthquakeMarker2);
    }
}
function removeEarthquakeMarker(earthquakeMarker3) {
    if(map.hasLayer(earthquakeMarker3)) {
        map.removeLayer(earthquakeMarker3);
    }else{
        map.addLayer(earthquakeMarker3);
    }
}
function removeEarthquakeMarker(earthquakeMarker4) {
    if(map.hasLayer(earthquakeMarker4)) {
        map.removeLayer(earthquakeMarker4);
    }else{
        map.addLayer(earthquakeMarker4);
    }
}
function removeEarthquakeMarker(earthquakeMarker5) {
    if(map.hasLayer(earthquakeMarker5)) {
        map.removeLayer(earthquakeMarker5);
    }else{
        map.addLayer(earthquakeMarker5);
    }
}

//terceira parte


        