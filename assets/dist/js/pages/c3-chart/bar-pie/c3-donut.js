/*************************************************************************************/
// -->Template Name: Bootstrap Press Admin
// -->Author: Themedesigner
// -->Email: niravjoshi87 @gmail.com
// -->File: c3_chart_JS
/*************************************************************************************/
$(function() {
    var o = c3.generate({
        bindto: "#jb-card",
        color: { pattern: ["#2d6bff", "#ffce39", "#f62d51", "#407aff","#6effef","#4fc3f7"] },
        data: {
            columns: [
                ["Finalizado", 180],
                ["Facturado", 90],
                ["Andamento", 155],
                ["Aberto", 110],
                ["Aguardando Peças", 75],
                ["Cancelado", 55]
            ],
            type: "donut"
        },

        donut: { 
            title: "Job Card's", 
            width: 35, },
            legend: {
                hide: true
                    //or hide: 'data1'
                    //or hide: ['data1', 'data2']
            },
    });

});

$(function() {
    var o = c3.generate({
        bindto: "#estoque",
        color: { pattern: ["#6effef","#4fc3f7"] },
        data: {
            columns: [
                ["INDIGENA", 80],
                ["SIR MOTORS", 90]
            ],
            type: "donut",
            onclick: function(o, n) { console.log("onclick", o, n) },
            onmouseover: function(o, n) { console.log("onmouseover", o, n) },
            onmouseout: function(o, n) { console.log("onmouseout", o, n) }
        },

        donut: { title: "Estoque" }
    });

});

$(function() {
    var o = c3.generate({
        bindto: "#despesas",
        color: { pattern: ["#407aff","#0049ff"] },
        data: {
            columns: [
                ["INDIGENA", 58000],
                ["SIR MOTORS", 90000]
            ],
            type: "donut",
            onclick: function(o, n) { console.log("onclick", o, n) },
            onmouseover: function(o, n) { console.log("onmouseover", o, n) },
            onmouseout: function(o, n) { console.log("onmouseout", o, n) }
        },

        donut: { title: "Despesas" }
    });

});