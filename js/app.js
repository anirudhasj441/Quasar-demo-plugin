const app = Vue.createApp({
    el: "#q-app",
    delimiters: ['{{', '}}'],
    methods: {
        plot_bar(){
            const bar_plot = document.getElementById('bar-plot');
            Plotly.newPlot(bar_plot, data, layout);
        },
        plot_pie(){
            const pie_plot = document.getElementById('pie-plot');
            Plotly.newPlot(pie_plot, pie_data, layout);
        },
        plot_hist(){
            const hist_plot = document.getElementById('hist-plot');
            Plotly.newPlot(hist_plot, hist_data);
        },
    },
    data() {
        return {
            show:false,
            tab: null,
            splitterModel: 20,
            innerTab: null
        }
    },
});
app.use(Quasar);
app.mount('#q-app');

const layout = {
    title: "Graphs"
}

const pie_plot = document.getElementById('pie-plot');


const data = [
    {
        x: ['giraffes', 'orangutans', 'monkeys'],
        y: [20, 14, 23],
        type: 'bar'
    }
];

const pie_data = [
    {
        labels: ['giraffes', 'orangutans', 'monkeys'],
        values: [20, 14, 23],
        type: 'pie'
    }
];

var x = [];
for (var i = 0; i < 200; i ++) {
	x[i] = Math.random();
}

var hist_data = [{
    x: x,
    type: 'histogram',
  }];


