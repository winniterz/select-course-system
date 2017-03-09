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
            '0800243'=>[1,'数字图像处理',3,false], // 隶属于4个方向
            '0802363'=>[1,'多媒体技术基础',2.5,false],
            '0803211'=>[1,'数字语音信号处理',2,false],
            '0844171'=>[1,'视频处理与通信',2.5,false],
            '0844191'=>[1,'专业课程设计(多选)',5]
        ];
        $dir_course[1] = [
            '0800243'=>[2,'数字图像处理',3,false],
            '0844181'=>[2,'数据库及应用实践',3.5,false], // 2个方向
            '0806493'=>[2,'数据挖掘',3,false], // 2个方向
            '0833101'=>[2,'网络信息安全',2,false],
            '0844192'=>[2,'专业课程设计(多选)',5]
        ];
        $dir_course[2] = [
            '0809891'=>[3,'JAVA语言程序设计',2,true],
            '0835881'=>[3,'TCP/IP网络编程',2,false],
            '1202912'=>[3,'电子商务概论',2,false],
            '0809924'=>[3,'计算机网络安全',2, true],
            '0844201'=>[3,'计算机网络实验',2,false],
            '0844211'=>[3,'互联网应用系统设计与实验',5,false],
        ];
        $dir_course[3] = [
            '0800243'=>[4,'数字图像处理',3,false],
            '0844221'=>[4,'机电控制技术',4,false],
            '0844231'=>[4,'智能硬件系统设计',4,false],
            '0844241'=>[4,'智能机器人设计',4,false],
        ];
        $dir_course[4] = [
            '0803151'=>[5,'DSP处理器及应用',3, true],
            '0844251'=>[5,'数字信号系统设计与实现',6,false],
            '0844261'=>[5,'数字信号处理平台高级程序设计',2,false],
            '0844271'=>[5,'现代数字信号处理',2,false],
            '0840331'=>[5,'矩阵信号处理',2]
        ];
        $dir_course[5] = [
            '0800243'=>[6,'数字图像处理',3,false],
            '0806493'=>[6,'数据挖掘',3,false],
            '0833121'=>[6,'机器学习导论',2,false], // 2个方向
            '0844281'=>[6,'多媒体搜索技术',3,false],
            '0844291'=>[6,'计算机视觉理论与实践',4,false],
        ];
        $dir_course[6] = [
            '0701544'=>[7,'普通生物学',3,false],
            '0844181'=>[7,'数据库及应用实践',3.5,true],
            '0833121'=>[7,'机器学习导论',2,false],
            '0844311'=>[7,'基因组信息工程',3,false],
            '0844321'=>[7,'转化数据医学',3.5,false],
        ];
        $common_course = [
            '0808041' => [0,'操作系统',3,true],
            '0809961' => [0,'虚拟仪器技术及应用',2,true],
            '0803231' => [0,'传感器技术及应用',2,true],
            '0810651' => [0,'微电子器件与IC设计',3.5,true],
            '0821351' => [0,'ARM处理器及应用',3,true],
            '0821361' => [0,'Altera可编程片上系统及应用',3,true],
            '0821371' => [0,'Xilinx FPGA及应用',3,true],
            '0821381' => [0,'MSP430单片机及应用',3,true],
            '0821391' => [0,'Freescale单片机及应用',3,true],
            '0821401' => [0,'8051系列单片机原理及应用',3,true],
            '0821411' => [0,'嵌入式Linux软件设计',3,true],
            '0844121' => [0,'数据通信网络技术',2,true],
            '0844131' => [0,'绿色通信',2,true],
            '0833061' => [0,'小波分析与应用',2,true],
            '0821341' => [0,'软件无线电',2,true],
            '0844141' => [0,'物联网',2,true],
            '0830041' => [0,'光纤通信基础',2,true],
            '0840381' => [0,'应用密码学',2,true],
            '0700972' => [0,'医学图像处理',2,true],
            '0833151' => [0,'无线传感器网络',2,true],
            '0840262' => [0,'移动互联网',2,true],
            '0844151' => [0,'天线与电波传播',2,true],
            '0844161' => [0,'微波射频电路',2,true],
        ];
        foreach( $dir_course as $key => $value){
            foreach($value as $k=>$v){
                factory(\App\Model\Course::class)->create();
            }
        }

    }
}
