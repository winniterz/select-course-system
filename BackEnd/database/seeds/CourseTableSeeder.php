<?php

use Illuminate\Database\Seeder;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dir = [
            '多媒体信息处理','大数据处理','网络应用','智能电路系统','数字信号处理','机器学习与搜索','健康医疗信息处理'
        ];
        $dir_course = [];
        $dir_course[0] =[
            '0800243'=>['数字图像处理',3], // 隶属于4个方向
            '0802363'=>['多媒体技术基础',2.5],
            '0803211'=>['数字语音信号处理',2],
            '0844171'=>['视频处理与通信',2.5],
            '0844191'=>['专业课程设计(多选)',5]
        ];
        $dir_course[1] = [
            '0800243'=>['数字图像处理',3],
            '0844181'=>['数据库及应用实践',3.5], // 2个方向
            '0806493'=>['数据挖掘',3], // 2个方向
            '0833101'=>['网络信息安全',2],
            '0844192'=>['专业课程设计(多选)',5]
        ];
        $dir_course[2] = [
            '0809891'=>['JAVA语言程序设计',2],
            '0835881'=>['TCP/IP网络编程',2],
            '1202912'=>['电子商务概论',2],
            '0809924'=>['计算机网络安全',2],
            '0844201'=>['计算机网络实验',2],
            '0844211'=>['互联网应用系统设计与实验',5],
        ];
        $dir_course[3] = [
            '0800243'=>['数字图像处理',3],
            '0844221'=>['机电控制技术',4],
            '0844231'=>['智能硬件系统设计',4],
            '0844241'=>['智能机器人设计',4],
        ];
        $dir_course[4] = [
            '0803151'=>['DSP处理器及应用',3],
            '0844251'=>['数字信号系统设计与实现',6],
            '0844261'=>['数字信号处理平台高级程序设计',2],
            '0844271'=>['现代数字信号处理',2],
            '0840331'=>['矩阵信号处理',2]
        ];
        $dir_course[5] = [
            '0800243'=>['数字图像处理',3],
            '0806493'=>['数据挖掘',3],
            '0833121'=>['机器学习导论',2], // 2个方向
            '0844281'=>['多媒体搜索技术',3],
            '0844291'=>['计算机视觉理论与实践',4],
        ];
        $dir_course[6] = [
            '0701544'=>['普通生物学',3],
            '0844181'=>['数据库及应用实践',3.5],
            '0833121'=>['机器学习导论',2],
            '0844311'=>['基因组信息工程',3],
            '0844321'=>['转化数据医学',3.5],
        ];
        $common_course = [
            '0808041' => ['操作系统',3],
            '0809961' => ['虚拟仪器技术及应用',2],
            '0803231' => ['传感器技术及应用',2],
            '0810651' => ['微电子器件与IC设计',3.5],
            '0821351' => ['ARM处理器及应用',3],
            '0821361' => ['Altera可编程片上系统及应用',3],
            '0821371' => ['Xilinx FPGA及应用',3],
            '0821381' => ['MSP430单片机及应用',3],
            '0821391' => ['Freescale单片机及应用',3],
            '0821401' => ['8051系列单片机原理及应用',3],
            '0821411' => ['嵌入式Linux软件设计',3],
            '0844121' => ['数据通信网络技术',2],
            '0844131' => ['绿色通信',2],
            '0833061' => ['小波分析与应用',2],
            '0821341' => ['软件无线电',2],
            '0844141' => ['物联网',2],
            '0830041' => ['光纤通信基础',2],
            '0840381' => ['应用密码学',2],
            '0700972' => ['医学图像处理',2],
            '0833151' => ['无线传感器网络',2],
            '0840262' => ['移动互联网',2],
            '0844151' => ['天线与电波传播',2],
            '0844161' => ['微波射频电路',2],

            // 部分属于选修课的公选课
            '0809891'=>['JAVA语言程序设计',2],
            '0809924'=>['计算机网络安全',2],
            '0803151'=>['DSP处理器及应用',3],
            '0844181'=>['数据库及应用实践',3.5],

        ];
        foreach( $dir_course as $key => $value){
            foreach($value as $k=>$v){
                $c = factory(\App\Model\Course::class)->make([
                        'course_code'=>$k,
                        'title'=> $v[0],
                        'credit'=>$v[1],
                    ]);
                $isExists = \App\Model\Course::where("course_code",$k)->get();
                if(count($isExists)){ // 如果存在则只更新关系
                    \App\Model\Direction::find($key+1)->course()->attach($isExists[0]->id);
                }else{ // 否则即保存也更新
                    \App\Model\Direction::find($key+1)->course()->save($c);
                }

            }
        }
        foreach ($common_course as $key =>$item) {
            $c = factory(\App\Model\Course::class)->make([
                'course_code'=> $key,
                'title'=> $item[0],
                'credit'=> $item[1],
                'is_common'=> true,
            ]);
            $isExists = \App\Model\Course::where("course_code",$key)->get();
            if(count($isExists)){ // 如果存在则只更新 is_common的值
                $isExists[0]->update(['is_common'=>true]);
            }else{ // 否则即保存也更新
                $c->save();
            }
        }

    }
}
