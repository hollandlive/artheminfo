$handler->display->display_options['fields']['title_2']['relationship'] = 'field_opleidingsinstituut_target_id';
   $handler->display->display_options['fields']['title_2']['label'] = 'Organisaties';
   $handler->display->display_options['fields']['title_2']['alter']['alter_text'] = TRUE;
-  $handler->display->display_options['fields']['title_2']['alter']['text'] = '[title_1] &<br>
+  $handler->display->display_options['fields']['title_2']['alter']['text'] = '[title_1] &<br>
 [title_2]';
   $handler->display->display_options['fields']['title_2']['link_to_node'] = FALSE;
   /* Veld: Inhoud: Titel */
   $handler->display->display_options['fields']['nothing']['table'] = 'views';
   $handler->display->display_options['fields']['nothing']['field'] = 'nothing';
   $handler->display->display_options['fields']['nothing']['label'] = 'Acties';
-  $handler->display->display_options['fields']['nothing']['alter']['text'] = '<div class="nowrap">[registration_change_enddate]
-[registration_resend_mail]
-[registration_cancel_registration_link]
-[beheer_diploma]
+  $handler->display->display_options['fields']['nothing']['alter']['text'] = '<div class="nowrap">[registration_change_enddate]
+[registration_resend_mail]
+[registration_cancel_registration_link]
+[beheer_diploma]
 [view_node]</div>';
   $handler->display->display_options['fields']['nothing']['element_type'] = '0';
   $handler->display->display_options['fields']['nothing']['element_label_type'] = '0';
   $handler->display->display_options['fields']['title_2']['relationship'] = 'field_opleidingsinstituut_target_id';
   $handler->display->display_options['fields']['title_2']['label'] = 'Organisaties';
   $handler->display->display_options['fields']['title_2']['alter']['alter_text'] = TRUE;
-  $handler->display->display_options['fields']['title_2']['alter']['text'] = '[title_1] &<br>
+  $handler->display->display_options['fields']['title_2']['alter']['text'] = '[title_1] &<br>
 [title_2]';
   $handler->display->display_options['fields']['title_2']['link_to_node'] = FALSE;
   /* Veld: Inhoud: Titel */
   $handler->display->display_options['fields']['nothing']['table'] = 'views';
   $handler->display->display_options['fields']['nothing']['field'] = 'nothing';
   $handler->display->display_options['fields']['nothing']['label'] = 'Acties';
-  $handler->display->display_options['fields']['nothing']['alter']['text'] = '<div class="nowrap">[registration_change_enddate]
-[registration_resend_mail]
-[registration_reactivate_registration_link]
-[registration_cancel_registration_link]
-[beheer_diploma]
+  $handler->display->display_options['fields']['nothing']['alter']['text'] = '<div class="nowrap">[registration_change_enddate]
+[registration_resend_mail]
+[registration_reactivate_registration_link]
+[registration_cancel_registration_link]
+[beheer_diploma]
 [view_node]</div>';
   $handler->display->display_options['fields']['nothing']['element_type'] = '0';
   $handler->display->display_options['fields']['nothing']['element_label_type'] = '0';
   $handler->display->display_options['fields']['field_telefoon']['table'] = 'field_data_field_telefoon';
   $handler->display->display_options['fields']['field_telefoon']['field'] = 'field_telefoon';
   $handler->display->display_options['fields']['field_telefoon']['relationship'] = 'profile';
+  $handler->display->display_options['fields']['field_telefoon']['alter']['alter_text'] = TRUE;
+  $handler->display->display_options['fields']['field_telefoon']['alter']['text'] = '[field_telefoon] ';
   /* Veld: Gebruiker: E-mailadres */
   $handler->display->display_options['fields']['mail']['id'] = 'mail';
   $handler->display->display_options['fields']['mail']['table'] = 'users';
   $handler->display->display_options['fields']['field_reden_beeindiging']['table'] = 'field_data_field_reden_beeindiging';
   $handler->display->display_options['fields']['field_reden_beeindiging']['field'] = 'field_reden_beeindiging';
   $handler->display->display_options['fields']['field_reden_beeindiging']['type'] = 'taxonomy_term_reference_plain';
+  /* Veld: Inhoud: Basisleerplaats */
+  $handler->display->display_options['fields']['field_basisleerplaats']['id'] = 'field_basisleerplaats';
+  $handler->display->display_options['fields']['field_basisleerplaats']['table'] = 'field_data_field_basisleerplaats';
+  $handler->display->display_options['fields']['field_basisleerplaats']['field'] = 'field_basisleerplaats';
   $handler->display->display_options['path'] = 'registraties/download';
   $handler->display->display_options['displays'] = array(
     'advanced_search' => 'advanced_search',
     t('Geboortedatum'),
     t('Zorginstelling'),
     t('Organisaties'),
-    t('[title_1] &<br>
+    t('[title_1] &<br>
 [title_2]'),
     t('Opleiding'),
     t('Einddatum'),
     t('Bekijken'),
     t('- [view_node]<br>'),
     t('Acties'),
-    t('<div class="nowrap">[registration_change_enddate]
-[registration_resend_mail]
-[registration_cancel_registration_link]
-[beheer_diploma]
+    t('<div class="nowrap">[registration_change_enddate]
+[registration_resend_mail]
+[registration_cancel_registration_link]
+[beheer_diploma]
 [view_node]</div>'),
     t('Voornaam'),
     t('Achternaam'),
     t('Toon @start - @end van @total'),
     t('Heractiveren'),
     t('- [registration_reactivate_registration_link]<br>'),
-    t('<div class="nowrap">[registration_change_enddate]
-[registration_resend_mail]
-[registration_reactivate_registration_link]
-[registration_cancel_registration_link]
-[beheer_diploma]
+    t('<div class="nowrap">[registration_change_enddate]
+[registration_resend_mail]
+[registration_reactivate_registration_link]
+[registration_cancel_registration_link]
+[beheer_diploma]
 [view_node]</div>'),
     t('Status'),
     t('Mijn CZO - Registraties CZO'),
     t('Data export'),
     t('Huisnummer'),
     t('Telefoon'),
Add a comment to this line
+    t('[field_telefoon] '),
     t('Diploma nummer'),
     t('Datum beëindigen'),
     t('Leerjaar beëindigen'),
