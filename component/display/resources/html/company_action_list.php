<style>
.topM5{
    padding-top: 7px;
}
.bottomLine{
    border-bottom:1pt solid black;
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
            <table style="width:50%;" valign="top">
                <tr class='bottomLine'>
                    <td class='topM5'>Total Candidates :</td>
                    <td class='topM5'><?php echo $totalCandidates; ?></td>
                </tr>
                <tr>
                    <td class='topM5'>Active Candidates :</td>
                    <td class='topM5'><?php echo $activeCandidates; ?></td>
                </tr>
                <tr>
                    <td class='topM5'>Total Position Count :</td>
                    <td class='topM5'><?php echo $positionCount; ?></td>
                </tr>
                <tr>
                    <td class='topM5'>Pitch :</td>
                    <td class='topM5'><?php echo $pitch; ?></td>
                </tr>
                <tr>
                    <td class='topM5'>Resume Send :</td>
                    <td class='topM5'><?php echo $resume_send; ?></td>
                </tr>
                <tr>
                    <td class='topM5'>CCM1 :</td>
                    <td class='topM5'><?php echo $ccm1; ?></td>
                </tr>
                <tr>
                    <td class='topM5'>CCM2 :</td>
                    <td class='topM5'><?php echo $ccm2; ?></td>
                </tr>
                <tr>
                    <td class='topM5'>MCCM :</td>
                    <td class='topM5'><?php echo $mccm; ?></td>
                </tr>
                <tr>
                    <td class='topM5'>Offer :</td>
                    <td class='topM5'><?php echo $offer; ?></td>
                </tr>
                <tr>
                    <td class='topM5'>Placed :</td>
                    <td class='topM5'><?php echo $placed; ?></td>
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
