const path = require('path');  //node.js 에서 파일의 경로를 쉽게 핸들링할 수 있게 도와줌
module.exports = {
    mode: 'development',  //개발모드
    entry :"./souce/index.js",
    output:{
        path:path.resolve(__dirname, "public"),
        //__dirname : 파일이 위치하고 있는 경로를 알려주는 node.js 의 변수
        filename:"index_bundle.js"
    },
    module:{
        rules:[
            {
                test: /\.css$/,
                use:[
                    'css-loader',
                    'style-loader'
                ],
                
            }
        ]
    }
}