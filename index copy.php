<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Leaflet</title>
    <link rel="stylesheet" href="./leaflet/leaflet.css">
    <script src="./leaflet/leaflet.js"></script>
    <style>
        #map{
          height: 700px;
          width: 700px;
          border: solid 1px black;
        }
    </style>
    <script src = "./camadasGeoJson/biodivers_veg_sistemas_lacustres.geojson"></script>
    <script src = "./camadasGeoJson/rodovias.geojson"></script>
    <script src = "./camadasGeoJson/sedesMunicipais.geojson"></script>
</head>
<body>
    
    <div id = "map"></div>
    
    <input type="button" onclick = "removeMap(basemap, googleStreets, googleTerrain)" value="Basemap">
    <input type="button" onclick = "removeMap(googleStreets, basemap, googleTerrain)" value="Google Streets">
    <input type="button" onclick = "removeMap(googleTerrain, basemap, googleStreets)" value="Google Terrain">

    <input type="button" onclick = "removeEarthquakeMarker(earthquakeMarker1, earthquakeMarker2, earthquakeMarker3, earthquakeMarker4, earthquakeMarker5)" value="Marco Central de Boa Vista">
    <input type="button" onclick = "removeEarthquakeMarker(earthquakeMarker2, earthquakeMarker3, earthquakeMarker4, earthquakeMarker5, earthquakeMarker1)" value="Palácio do Governo">
    <input type="button" onclick = "removeEarthquakeMarker(earthquakeMarker3, earthquakeMarker4, earthquakeMarker5, earthquakeMarker1, earthquakeMarker2)" value="Assembléia Legislativa de Roraima">
    <input type="button" onclick = "removeEarthquakeMarker(earthquakeMarker4, earthquakeMarker5, earthquakeMarker1, earthquakeMarker2, earthquakeMarker3)" value="Tribunal de Justiça">
    <input type="button" onclick = "removeEarthquakeMarker(earthquakeMarker5, earthquakeMarker1, earthquakeMarker2, earthquakeMarker3, earthquakeMarker4)" value="Catedral">
    
    <script>
//11111111111111111111111111111111111111111111        
        let basemap = L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {});

        let googleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}',{
                maxZoom: 20,
                subdomains:['mt0','mt1','mt2','mt3']
        });

        let googleTerrain = L.tileLayer('http://{s}.google.com/vt/lyrs=p&x={x}&y={y}&z={z}',{
            maxZoom: 20,
            subdomains:['mt0','mt1','mt2','mt3']
        });   

        let map = L.map(document.getElementById('map'), {
        center: [2.820723, -60.672418],
        zoom: 9,
        layers:[basemap]
        });
// 222222222222222222222222222222222222222222222222
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

//333333333333333333333333333333333333333333333333

        let rodoviasGeoJson = L.geoJson(rodovia1, {
            
            onEachFeature:function(feature, layer){

                    if(feature.properties.jurisdicao == 'Municipal'){
                        var jud = 'MUN';
                    }else if(feature.properties.jurisdicao == 'Estadual'){
                        var jud = 'EST';
                    }else{
                        var jud = 'FED';
                    }

                layer.bindPopup('<br/> Rodovia: ' + jud);//Verificar o nome da variável Lat/Long
            },

            style: function(feature, layer){
                switch(feature.properties.jurisdicao){
                    case 'Municipal': return {color: "#836FFF"};
                    case 'Estadual': return {color: "#FF0000"};
                    case 'Federal': return {color: "#FFD700"};
                    default: return {color: "red"};
                }
            },

        })
            
        map.addLayer(rodoviasGeoJson);

        let sistLacustres1 = L.geoJson(sistLacustres, {
            color: 'red',
            weight: 0.5,
            fill: false,
        });
        //map.addLayer(sistLacustres1);
        let sedesMunic = L.geoJson(sedesMunic1, {
            color: 'red'
        });
        //map.addLayer(sedesMunic);

//2222222222222222222222222222222222222222222222222222222

        earthquakeMarker1.bindPopup("<b>Locais Especiais:</b> " + locaisEspeciais[0] + "<br><b>Área:</b> " + area[0]);
        earthquakeMarker2.bindPopup("<b>Locais Especiais:</b> " + locaisEspeciais[1] + "<br><b>Área:</b> " + area[1]);
        earthquakeMarker3.bindPopup("<b>Locais Especiais:</b> " + locaisEspeciais[2] + "<br><b>Área:</b> " + area[2]);
        earthquakeMarker4.bindPopup("<b>Locais Especiais:</b> " + locaisEspeciais[3] + "<br><b>Área:</b> " + area[3]);
        earthquakeMarker5.bindPopup("<b>Locais Especiais:</b> " + locaisEspeciais[4] + "<br><b>Área:</b> " + area[4]);

        //var basemap = L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {});
            //map.addLayer(basemap); //Forma 2
        //Pegar e atribuir dentro do mapa
        //basemap addTo(map); Fortma 3
        
        //map.addLayer(googleStreets);
        
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
          
        </script>

        <script>
            console.log(sistLacustres);
            console.log(rodovia1);
            console.log(sedesMunic1);
            console.log(rodovia1.features[501].properties.codtrechor);
        </script>

</body>
</html>