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