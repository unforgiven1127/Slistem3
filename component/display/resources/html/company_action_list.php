<style>
.topM5{
    padding-top: 7px;
}
tr.bottomLine td{
    border-bottom:1pt solid black;
}
.bold{
    font-weight: bold;
}
</style>

<table style="width:100%;" valign="top">
    <tr>
        <td><b> Statistics About the Company #<?php echo $compantId.' - '.$campany_name; ?></b></td>
    </tr>
</table>
<table style="width:100%;" valign="top">
    <tr>
        <td>
            <table style="width:50%; border-collapse: collapse;" valign="top">
                <tr class='bottomLine'>
                    <td class='topM5 bold'>Total Candidates :</td>
                    <td class='topM5'><?php echo $totalCandidates; ?></td>
                </tr>
                <tr class='bottomLine'>
                    <td class='topM5 bold'>Active Candidates :</td>
                    <td class='topM5'><?php echo $activeCandidates; ?></td>
                </tr>
                <tr class='bottomLine'>
                    <td class='topM5 bold'>Total Position Count :</td>
                    <td class='topM5'><?php echo $positionCount; ?></td>
                </tr>
                <tr class='bottomLine'>
                    <td class='topM5 bold'>Pitch :</td>
                    <td class='topM5'><?php echo $pitch; ?></td>
                </tr>
                <tr class='bottomLine'>
                    <td class='topM5 bold'>Resume Send :</td>
                    <td class='topM5'><?php echo $resume_send; ?></td>
                </tr>
                <tr class='bottomLine'>
                    <td class='topM5 bold'>CCM1 :</td>
                    <td class='topM5'><?php echo $ccm1; ?></td>
                </tr>
                <tr class='bottomLine'>
                    <td class='topM5 bold'>CCM2 :</td>
                    <td class='topM5'><?php echo $ccm2; ?></td>
                </tr>
                <tr class='bottomLine'>
                    <td class='topM5 bold'>MCCM :</td>
                    <td class='topM5'><?php echo $mccm; ?></td>
                </tr>
                <tr class='bottomLine'>
                    <td class='topM5 bold'>Offer :</td>
                    <td class='topM5'><?php echo $offer; ?></td>
                </tr>
                <tr class='bottomLine'>
                    <td class='topM5 bold'>Placed :</td>
                    <td class='topM5'><?php echo $placed; ?></td>
                </tr>
                <tr class='bottomLine'>
                    <td class='topM5 bold'>Fallen off :</td>
                    <td class='topM5'><?php echo $fallenOff; ?></td>
                </tr>
            </table>
        </td>
        <td>
            <table style="width:50%;" valign="top">
                <tr>
                    <td>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>


<script>

</script>
