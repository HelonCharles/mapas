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
</head>
<body>
    <div id = "map"></div>
    <div id = "earthquakeMarker"></div>

    <input type="button" onclick = "removeMap(basemap, googleStreets, googleTerrain)" value="Basemap">
    <input type="button" onclick = "removeMap(googleStreets, basemap, googleTerrain)" value="Google Streets">
    <input type="button" onclick = "removeMap(googleTerrain, basemap, googleStreets)" value="Google Terrain">

    <input type="button" onclick = "removeEarthquakeMarker(earthquakeMarker1, earthquakeMarker2, earthquakeMarker3, earthquakeMarker4, earthquakeMarker5)" value="Marco Central de Boa Vista">
    <input type="button" onclick = "removeEarthquakeMarker(earthquakeMarker2, earthquakeMarker3, earthquakeMarker4, earthquakeMarker5, earthquakeMarker1)" value="Palácio do Governo">
    <input type="button" onclick = "removeEarthquakeMarker(earthquakeMarker3, earthquakeMarker4, earthquakeMarker5, earthquakeMarker1, earthquakeMarker2)" value="Assembléia Legislativa de Roraima">
    <input type="button" onclick = "removeEarthquakeMarker(earthquakeMarker4, earthquakeMarker5, earthquakeMarker1, earthquakeMarker2, earthquakeMarker3)" value="Tribunal de Justiça">
    <input type="button" onclick = "removeEarthquakeMarker(earthquakeMarker5, earthquakeMarker1, earthquakeMarker2, earthquakeMarker3, earthquakeMarker4)" value="Catedral">
    


    <script>
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
        zoom: 17,
        layers:[basemap]
        });
        // Exercício Marcadores
        let locaisEspeciais = ["Marco central de Boa Vista", "Palácio", "AL-RR", "TJ-RR", "Catedral"];
        let area = [170, 1815, 6107, 1467, 1975];
        let earthquakeMarker1 = L.marker([2.820723, -60.672418]).addTo(map);
        let earthquakeMarker2 = L.marker([2.821054,-60.672853]).addTo(map);
        let earthquakeMarker3 = L.marker([2.821629, -60.671578]).addTo(map);
        let earthquakeMarker4 = L.marker([2.822845,-60.671793]).addTo(map);
        let earthquakeMarker5 = L.marker([2.819643,-60.673310]).addTo(map);
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
          
        </script>

        <script>
            /*function removeMap() {
                if(map.hasLayer(googlestreets)){
                    map.removeLayer(googlestreets);
                }
                
            }*/
        </script>
</body>
</html>