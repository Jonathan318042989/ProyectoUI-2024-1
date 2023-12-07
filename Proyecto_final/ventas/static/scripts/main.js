const getOptionChart1=()=>{
    return{
        color: ["#70A7B6"],


        tooltip:{
            show:true,
            trigger:"axis",
            triggerOn:"mousemove "

        },

        dataZoom:{
            show:true

        },
        xAxis: {
            type: 'category',
            data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
            axisLabel: {
                textStyle: {
                    color: ' #010315 ', // Color del texto del eje X
                    fontFamily: 'League Spartan', // Tipo de letra del texto del eje X
                    fontSize: 14 // Tamaño de letra del texto del eje X
                }
            }
        },
        yAxis: {
            type: 'value',
            name: '                   Ingresos mensuales [mil]',
            nameTextStyle: {
                color: '#010315', // Color del texto del nombre del eje Y
                fontFamily: 'League Spartan', // Tipo de letra del texto del nombre del eje Y
                fontSize: 16 // Tamaño de letra del texto del nombre del eje Y
            },
            axisLabel: {
                textStyle: {
                    color: ' #010315 ', // Color del texto del eje X
                    fontFamily: 'League Spartan', // Tipo de letra del texto del eje X
                    fontSize: 14 // Tamaño de letra del texto del eje X
                }
            }
        },
        series: [
            {
            data: [150, 230, 224, 218, 135, 147, 260],
            type: 'line'
            }
        ]
    };
};

const getOptionChart2 =()=> {
    return{
            color: ["#70A7B6", "#c81d25","#1a759f","#003554","#ff5a5f" ],
            tooltip: {
                trigger: 'axis'
            },
            legend: {
                data: ['Playeras', 'Gorras', 'Discos', 'Zapatos', 'Chamarras'],
                textStyle: {
                    color: '#010315', // Color del texto de la leyenda
                    fontFamily: 'League Spartan', // Tipo de letra del texto de la leyenda
                    fontSize: 13 // Tamaño de letra del texto de la leyenda
                }
            },
            grid: {
                left: '3%',
                right: '4%',
                bottom: '3%',
                containLabel: true
            },
            xAxis: {
                type: 'category',
                boundaryGap: false,
                data: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio'],
                axisLabel: {
                    textStyle: {
                        color: ' #010315 ', // Color del texto del eje X
                        fontFamily: 'League Spartan', // Tipo de letra del texto del eje X
                        fontSize: 14 // Tamaño de letra del texto del eje X
                    }
                }
            },
            yAxis: {
                type: 'value',
                name: 'Unidades vedidas',
                nameTextStyle: {
                    color: '#010315', // Color del texto del nombre del eje Y
                    fontFamily: 'League Spartan', // Tipo de letra del texto del nombre del eje Y
                    fontSize: 16 // Tamaño de letra del texto del nombre del eje Y
                },
                axisLabel: {
                    textStyle: {
                        color: ' #010315 ', // Color del texto del eje X
                        fontFamily: 'League Spartan', // Tipo de letra del texto del eje X
                        fontSize: 14 // Tamaño de letra del texto del eje X
                    }
                }

            },
            series: [
                {
                name: "Playeras",
                type: 'line',
                stack: 'Total',
                data: [120, 132, 101, 134, 90, 230, 210]
                },
                {
                name: 'Gorras',
                type: 'line',
                stack: 'Total',
                data: [220, 182, 191, 234, 290, 330, 310]
                },
                {
                name: 'Discos',
                type: 'line',
                stack: 'Total',
                data: [150, 232, 201, 154, 190, 330, 410]
                },
                {
                name: 'Zapatos',
                type: 'line',
                stack: 'Total',
                data: [320, 332, 301, 334, 390, 330, 320]
                },
                {
                name: 'Chamarras',
                type: 'line',
                stack: 'Total',
                data: [820, 932, 901, 934, 1290, 1330, 1320]
                }
            ]
    };
};

const getOptionChart4=()=>{
    return{
        color: ["#FA3C42"],

        tooltip:{
            show:true,
            trigger:"axis",
            triggerOn:"mousemove "

        },

        xAxis: {
            type: 'category',
            data: ['2017', '2018', '2019', '2020', '2021', '2022', '2023'],
            axisLabel: {
                textStyle: {
                    color: ' #010315 ', // Color del texto del eje X
                    fontFamily: 'League Spartan', // Tipo de letra del texto del eje X
                    fontSize: 14 // Tamaño de letra del texto del eje X
                }
            }
          },
          yAxis: {
            name: '             Ingresos anuales [mil]',
            nameTextStyle: {
                color: '#010315', // Color del texto del nombre del eje Y
                fontFamily: 'League Spartan', // Tipo de letra del texto del nombre del eje Y
                fontSize: 16 // Tamaño de letra del texto del nombre del eje Y
            },
            type: 'value',
            axisLabel: {
                textStyle: {
                    color: ' #010315 ', // Color del texto del eje X
                    fontFamily: 'League Spartan', // Tipo de letra del texto del eje X
                    fontSize: 14 // Tamaño de letra del texto del eje X
                }
            }
          },
          series: [
            {
              data: [120, 200, 150, 80, 70, 110, 90],
              type: 'bar'
            }
          ]

    };
};

const getOptionChart3=()=>{
    return{
        title: {
            text: 'Unidades vendidas por artistas',
            textStyle: {
                color: '#010315', // Color del texto del título
                fontFamily: 'League Spartan', // Tipo de letra del texto del título
                fontSize: 16, // Tamaño de letra del texto del título
            },
            left: 'center' // Ajusta la posición horizontal del título
        },
        color: ["#70A7B6", "#c81d25","#1a759f","#003554","#ff5a5f" ],

        tooltip: {
            trigger: 'item'
          },
          legend: {
            
            top: '5%',
            left: 'center',
            textStyle: {
                color: '#010315', // Color del texto de la leyenda
                fontFamily: 'League Spartan', // Tipo de letra del texto de la leyenda
                fontSize: 13 // Tamaño de letra del texto de la leyenda
            }
           
          },
          series: [
            {
              name: 'Access From',
              type: 'pie',
              radius: ['40%', '70%'],
              avoidLabelOverlap: false,
              itemStyle: {
                borderRadius: 10,
                borderColor: '#fff',
                borderWidth: 2
              },
              label: {
                show: false,
                position: 'center'
              },
              emphasis: {
                label: {
                  show: true,
                  fontSize: 40,
                  fontWeight: 'bold'
                }
              },
              labelLine: {
                show: false
              },
              data: [
                { value: 1048, name: 'Taylor Swift' },
                { value: 735, name: 'Lady Gaga' },
                { value: 580, name: 'Morat' },
                { value: 484, name: 'Justin Bieber' },
                { value: 300, name: 'Junior H' }
              ]
            }
          ]

    };
};
    

const initCharts= () => {
    const chart1 = echarts.init(document.getElementById("chart1"));
    const chart2 = echarts.init(document.getElementById("chart2"));
    const chart3 = echarts.init(document.getElementById("chart3"));
    const chart4 = echarts.init(document.getElementById("chart4"));


    



    chart1.setOption(getOptionChart1());
    chart2.setOption(getOptionChart2());
    chart3.setOption(getOptionChart3());
    chart4.setOption(getOptionChart4());



};


window.addEventListener('load', () => {
    initCharts();
  });
