sites/all/modules/custom/czo_rapportage/includes/pages/capaciteitsorgaan.inc
       
       // per zorginstelling een rijtje cellen maken
       if ($head === NULL) {
         $head = array(
-          '[Regio]',
-          '[Organisatie]',
-          '[Adres]',
-          '[Postcode]',
-          '[Plaats]',
+          'Regio',
+          'Organisatie',
+          'Adres',
+          'Postcode',
+          'Plaats',
         );
         // eerst de kop
         foreach ($selectors as $selector) {
-          $head[] = "[{$selector}]";
+          $head[] = "{$selector}";
 
           $n = 0;
 
     }
 
     if (count($rows) > 0) {
-      $filename = "rapportage-capaciteitsorgaan-{$year}.csv";
-      header("Content-type: text/x-csv; charset=utf-8");
-      header("Content-disposition: attachement; filename=$filename");
 
-      // STDOUT werkt niet hier...
-      $fh = fopen('php://output', 'w');
+      $filename = "controlelijst-instroom-uitstroom-{$year}.xls";
 
-      fputcsv($fh, $head, ';');
-      foreach ($rows as $zid => $data) {
-        fputcsv($fh, $data, ';');
-      }
-      return TRUE;
+      // library laden  
+      libraries_load('PHPExcel');
+
+      // een nieuwe PHPExcel object aanmaken 
+      $objPHPExcel = new PHPExcel();
+
+      // output naar een client browser versturen
+      header("Content-Type: application/vnd.ms-excel");
+      header("Content-Disposition: attachment;filename=$filename");
+      header('Cache-Control: max-age=0');
+      
+      // selecteren het worksheet
+      $sheet = $objPHPExcel->getActiveSheet();
+      
+      // selecteren de eerste rij en invullen met data $head
+      $sheet->fromArray(
+        $head,
+        NULL,
+        'A1'
+      );
+      
+      // kiezen voor eerste rij
+      $right = $sheet->getHighestColumn();
+      
+      // een array zetten met styles voor de koptext
+      $styleArray = array(
+        'font' => array (
+          'bold' => TRUE,
+        ),
+      );
+      
+      // apply styles van array
+      $sheet->getStyle("A1:{$right}1")->applyFromArray($styleArray);
+      
+      // koptext roteren op 60 graden - verticaal zetten
+      $sheet->getStyle("A1:{$right}1")->getAlignment()->setTextRotation(60);
+      
+      // verschillende breedtes zetten voor columns B en C
+      $sheet->getColumnDimension('A')->setWidth(20);
+      $sheet->getColumnDimension('B')->setWidth(58);
+      $sheet->getColumnDimension('C')->setWidth(24);
+      $sheet->getColumnDimension('D')->setWidth(8);
+      $sheet->getColumnDimension('E')->setWidth(16);
+      
+      // zetten default breedte 
+      $sheet->getDefaultColumnDimension()->setWidth(5);
+      
+      // selecteren de rest van de rijen en invullen met data $rows
+      $sheet->fromArray(
+        $rows,
+        NULL,
+        'A2'
+      );
+      
+      // schrijven data array ($head, $rows) in een file
+      $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
+      
+      // output opslaan
+      $objWriter->save('php://output');
+      
+      // exit van drupal
+      drupal_exit();
     }
   } catch (Exception $ex) {
     drupal_set_message("$ex", 'warning', FALSE);
  
  
  sites/all/modules/custom/czo_rapportage/includes/pages/zorginstellingen.inc
  
  // per zorginstelling een rijtje cellen maken
       if ($head === NULL) {
         $head = array(
-          '[NZa nummer]',
-          '[Organisatie]',
+          'NZa nummer',
+          'Organisatie',
 //          '[Adres]',
 //          '[Postcode]',
-          '[Plaats]',
+          'Plaats',
         );
         // eerst de kop
         foreach ($selectors as $selector) {
-          $head[] = "[{$selector}]";
+          $head[] = "{$selector}";
 
           $n = 0;
 
     }
 
     if (count($rows) > 0) {
-      $filename = "controlelijst-instroom-uitstroom-{$year}.csv";
-      header("Content-type: text/x-csv; charset=utf-8");
-      header("Content-disposition: attachement; filename=$filename");
 
-      // STDOUT werkt niet hier...
-      $fh = fopen('php://output', 'w');
+      $filename = "controlelijst-instroom-uitstroom-{$year}.xls";
 
-      fputcsv($fh, $head, ';');
-      foreach ($rows as $zid => $data) {
-        fputcsv($fh, $data, ';');
-      }
-      return TRUE;
+      // library laden  
+      libraries_load('PHPExcel');
+
+      // een nieuwe PHPExcel object aanmaken 
+      $objPHPExcel = new PHPExcel();
+
+      // output naar een client browser versturen
+      header("Content-Type: application/vnd.ms-excel");
+      header("Content-Disposition: attachment;filename=$filename");
+      header('Cache-Control: max-age=0');
+      
+      // selecteren het worksheet
+      $sheet = $objPHPExcel->getActiveSheet();
+      
+      // selecteren de eerste rij en invullen met data $head
+      $sheet->fromArray(
+        $head,
+        NULL,
+        'A1'
+      );
+      
+      // kiezen voor eerste rij
+      $right = $sheet->getHighestColumn();
+      
+      // een array zetten met styles voor de koptext
+      $styleArray = array(
+        'font' => array (
+          'bold' => TRUE,
+        ),
+      );
+      
+      // apply styles van array
+      $sheet->getStyle("A1:{$right}1")->applyFromArray($styleArray);
+      
+      // koptext roteren op 60 graden - verticaal zetten
+      $sheet->getStyle("A1:{$right}1")->getAlignment()->setTextRotation(60);
+      
+      // verschillende breedtes zetten voor columns B en C
+      $sheet->getColumnDimension('A')->setWidth(12);
+      $sheet->getColumnDimension('B')->setWidth(64);
+      $sheet->getColumnDimension('C')->setWidth(18);
+     
+      // zetten default breedte 
+      $sheet->getDefaultColumnDimension()->setWidth(5);
+      
+      // selecteren de rest van de rijen en invullen met data $rows
+      $sheet->fromArray(
+        $rows,
+        NULL,
+        'A2'
+      );
+      
+      // schrijven data array ($head, $rows) in een file
+      $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
+      
+      // output opslaan
+      $objWriter->save('php://output');
+      
+      // exit van drupal
+      drupal_exit();
     }
   } catch (Exception $ex) {
     drupal_set_message("$ex", 'warning', FALSE);
   }
-  
 }
 
 function _czo_rapportage_zorginstellingen_pdf($year, $nid) {
       ),
       'csv' => array(
         '#type' => 'submit',
-        '#value' => t('Download CSV'),
+        '#value' => t('Download XLS'),
         '#submit' => array('_czo_rapportage_zorginstellingen_form_submit_csv'),
       ),
     )

     
     
