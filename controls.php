
<?php

require_once './common/tracy/src/tracy.php';
use Tracy\Debugger;

//if you want session to be handled in database
require_once './common/lib/db_session.inc.php5';
require_once './common/lib/ChromePhp.php';
//require_once './common/lib/verticalSlider/js/jquery.totemticker.js';

session_start();
header("Cache-Control: no-cache");
header("Pragma: no-cache");

// Connect to redis
$GLOBALS['redis'] = new Redis();
$GLOBALS['redis']->pconnect('127.0.0.1');

ini_set('memory_limit', '-1');
//$nMemory = memory_get_usage();

//prevent infinite loops if assert fires another assert (mailAssert) that is firing a new assert that ...
$_SESSION['assert'] = 0;
$_SESSION['mail_assert'] = 0;

require_once './conf/main_config.inc.php5';
require_once './common/lib/global_func.inc.php5';
require_once './component/dependency.inc.php5';

require_once './conf/custom_config/'.CONST_WEBSITE.'/config.inc.php5';

define('DB_NAME_SLISTEM','slistem');
define('DB_SERVER_SLISTEM', '127.0.0.1');
define('DB_USER_SLISTEM', 'pma_admin');
define('DB_PASSWORD_SLISTEM', 'KVW4PVVAWHASuRDz');

mysql_connect( DB_SERVER_SLISTEM, DB_USER_SLISTEM, DB_PASSWORD_SLISTEM) or die(mysql_error());
mysql_select_db(DB_NAME_SLISTEM) or die(mysql_error());


$slistemQuery = " SELECT slc.sl_companypk as company_id, slc.name as company_name,slpd.sl_position_detailpk as position_detail_id
FROM sl_company slc
left JOIN sl_position slp on slp.companyfk = slc.sl_companypk
left JOIN sl_position_detail slpd on slpd.positionfk = slp.sl_positionpk
WHERE slc.level = '8' ";
$slistemQuery = mysql_query($slistemQuery);

$allMeetings = array();

$count = 0;

while($meetingData = mysql_fetch_assoc($slistemQuery))
{
  if($meetingData['position_detail_id'] == null)
  {
    //$company_id = $meetingData['company_id'];
    //$update_quert = " UPDATE sl_company SET level = 0 WHERE sl_companypk = '".$company_id."'";
    //echo $update_quert.'<br>';
    //$query = mysql_query($update_quert);
    $count++;
  }
}

echo $count;

/*/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package scheduler;
import java.net.URI;
import java.awt.Desktop;
import java.io.IOException;
import java.text.DateFormat;
import java.text.SimpleDateFormat;
import java.util.Calendar;
import java.util.Date;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.swing.JOptionPane;

/**
 *
 * @author slate
 */
public class Scheduler {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        
        scheduler_view s = new scheduler_view();
        s.setVisible(true);
        
        String backupTime = "08:00:00"; // slistem live backup to Dropbox
        String downloadTime = "11:00:00"; // Canada download backup from Dropbox
        String meetingCheckTime = "13:00:00"; // Canada download backup from Dropbox
        

        
        while(true)
        {
            DateFormat df = new SimpleDateFormat("HH:mm:ss");
            Date getDate = new Date();
            String now = df.format(getDate).toString();
            
            
            if(downloadTime.equals(now))
            {
                
                Date dt = new Date();
                Calendar c = Calendar.getInstance(); 
                c.setTime(dt); 
                c.add(Calendar.DATE, 1);
                dt = c.getTime();

                System.out.println(dt);

                DateFormat todays = new SimpleDateFormat("YYYY_MM_dd");
                Date getDate_ = new Date();
                String nowToday = todays.format(dt).toString();

                String fileName = "db_backup_"+nowToday+"_.tgz";
                String script = "scp admin@ec2-35-161-171-119.us-west-2.compute.amazonaws.com:/web/slistem/beta/test/"+fileName+" /web/backup/db_backups";
                /*try
                {
                    System.out.println(script);
                    Runtime.getRuntime().exec(script);
                }
                catch (IOException ex)
                {
                    Logger.getLogger(Scheduler.class.getName()).log(Level.SEVERE, null, ex);
                }*/
                /*String url = "https://slistemlocal.com/getbackup.php";
                try {
                    java.awt.Desktop.getDesktop().browse(java.net.URI.create(url));
                } catch (IOException ex) {
                    Logger.getLogger(Scheduler.class.getName()).log(Level.SEVERE, null, ex);
                }
                
                try { 
                    Thread.sleep(5000);
                } catch (InterruptedException ex) {
                    Logger.getLogger(Scheduler.class.getName()).log(Level.SEVERE, null, ex);
                }*/
                

            }
            
            if(backupTime.equals(now))
            {
                //System.out.println(now);
                //System.out.println(downloadTime);
                
                String url = "https://beta2.slate.co.jp/sqlbackup.php";
                try {
                    java.awt.Desktop.getDesktop().browse(java.net.URI.create(url));
                } catch (IOException ex) {
                    Logger.getLogger(Scheduler.class.getName()).log(Level.SEVERE, null, ex);
                }
                
                try { 
                    Thread.sleep(5000);
                } catch (InterruptedException ex) {
                    Logger.getLogger(Scheduler.class.getName()).log(Level.SEVERE, null, ex);
                }
            }
            
            if(meetingCheckTime.equals(now))
            {
                //System.out.println(now);
                //System.out.println(downloadTime);
                
                String url = "https://beta2.slate.co.jp/checkMeetings.php";
                try {
                    java.awt.Desktop.getDesktop().browse(java.net.URI.create(url));
                } catch (IOException ex) {
                    Logger.getLogger(Scheduler.class.getName()).log(Level.SEVERE, null, ex);
                }
                
                try { 
                    Thread.sleep(5000);
                } catch (InterruptedException ex) {
                    Logger.getLogger(Scheduler.class.getName()).log(Level.SEVERE, null, ex);
                }
            }
            
            
        }
        
        
        
        /*while(true)
        {
            
        }*/
        
        /*String url = "https://www.google.ca";
        try {
            java.awt.Desktop.getDesktop().browse(java.net.URI.create(url));
        } catch (IOException ex) {
            Logger.getLogger(Scheduler.class.getName()).log(Level.SEVERE, null, ex);
        }*/
    }
    
}
*/