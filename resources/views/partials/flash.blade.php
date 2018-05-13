<div class="row flash">
    <div class="col-sm-12">
        <table>
            <tr style="">
                <td class="flash-title">
                    FLASH INFO<div class="arrow-left"></div>
                </td>
                <td class="flash-content">
                    <marquee scrollamount="5" direction="left" onMouseOver="this.stop()" onMouseOut="this.start()">
                        @foreach($infos as $info)
                        <span style="background-color: #fff; padding: 5px; color: #F0941F">flash</span> {{ $info->content }} &nbsp;&nbsp;&nbsp;&nbsp;
                        @endforeach
                    </marquee>
                </td>
            </tr>
        </table>
    </div>
</div>