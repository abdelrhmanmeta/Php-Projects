<?php 
include 'db_connect.php';
if(isset($_GET['id'])){
	$qry = $conn->query("SELECT * FROM task_list where id = ".$_GET['id'])->fetch_array();
	foreach($qry as $k => $v){
		$$k = $v;
	}
}
?>
<div class="container-fluid">
	<form action="" id="manage-task">
		<input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">
		<input type="hidden" name="project_id" value="<?php echo isset($_GET['pid']) ? $_GET['pid'] : '' ?>">
		<div class="form-group">
		<label for="">Teeth number</label>
		<select name="task" id="task" class="custom-select custom-select-sm">
				<option value="UR-8" <?php echo isset($task) ?>>UR-8</option>
				<option value="UR-7" <?php echo isset($task) ?>>UR-7</option>
				<option value="UR-6" <?php echo isset($task) ?>>UR-6</option>
				<option value="UR-5" <?php echo isset($task) ?>>UR-5</option>
				<option value="UR-4" <?php echo isset($task) ?>>UR-4</option>
				<option value="UR-3" <?php echo isset($task) ?>>UR-3</option>
				<option value="UR-2" <?php echo isset($task) ?>>UR-2</option>
				<option value="LR-1" <?php echo isset($task) ?>>LR-1</option>
				<option value="LR-8" <?php echo isset($task) ?>>LR-8</option>
				<option value="LR-7" <?php echo isset($task) ?>>LR-7</option>
				<option value="LR-6" <?php echo isset($task) ?>>LR-6</option>
				<option value="LR-5" <?php echo isset($task) ?>>LR-5</option>
				<option value="LR-4" <?php echo isset($task) ?>>LR-4</option>
				<option value="LR-3" <?php echo isset($task) ?>>LR-3</option>
				<option value="LR-2" <?php echo isset($task) ?>>LR-2</option>
				<option value="LR-1" <?php echo isset($task) ?>>LR-1</option>
				<option value="UL-8" <?php echo isset($task) ?>>UL-8</option>
				<option value="UL-7" <?php echo isset($task) ?>>UL-7</option>
				<option value="UL-6" <?php echo isset($task) ?>>UL-6</option>
				<option value="UL-5" <?php echo isset($task) ?>>UL-5</option>
				<option value="UL-4" <?php echo isset($task) ?>>UL-4</option>
				<option value="UL-3" <?php echo isset($task) ?>>UL-3</option>
				<option value="UL-2" <?php echo isset($task) ?>>UL-2</option>
				<option value="UL-1" <?php echo isset($task) ?>>UL-1</option>
				<option value="LL-8" <?php echo isset($task) ?>>LL-8</option>
				<option value="LL-7" <?php echo isset($task) ?>>LL-7</option>
				<option value="LL-6" <?php echo isset($task) ?>>LL-6</option>
				<option value="LL-5" <?php echo isset($task) ?>>LL-5</option>
				<option value="LL-4" <?php echo isset($task) ?>>LL-4</option>
				<option value="LL-3" <?php echo isset($task) ?>>LL-3</option>
				<option value="LL-2" <?php echo isset($task) ?>>LL-2</option>
				<option value="LL-1" <?php echo isset($task) ?>>LL-1</option>


</select>
		<div class="form-group">
			<label for="">Procedures </label>
			<select name="point_type" id="point_type" class="custom-select custom-select-sm">
				<option value="B1 - Home Bleaching" <?php echo isset($point_type) ?>>B1 - Home Bleaching</option>
				<option value="B6 - Home Bleaching / Extra Syringe" <?php echo isset($point_type) ?>>B6 - Home Bleaching / Extra Syringe</option>
				<option value="B3 - Office Bleaching" <?php echo isset($point_type) ?>>B3 - Office Bleaching</option>
				<option value="B5 - Crystal" <?php echo isset($point_type) ?>>B5 - Crystal</option>
				<option value="B2 - Twinkle" <?php echo isset($point_type) ?>>B2 - Twinkle</option>
				<option value="Crown cementation" <?php echo isset($point_type) ?>>Crown cementation</option>
				<option value="crown removal" <?php echo isset($point_type) ?>>crown removal</option>
				<option value="E-Max Crown" <?php echo isset($point_type) ?>>E-Max Crown</option>
				<option value="Fiber Post & Crown" <?php echo isset($point_type) ?>>Fiber Post & Crown</option>
				<option value="Metal Post & Crown" <?php echo isset($point_type) ?>>Metal Post & Crown</option>
				<option value="Veneers Lumineers" <?php echo isset($point_type) ?>>Veneers Lumineers</option>
				<option value="Zirconia" <?php echo isset($point_type) ?>>Zirconia</option>
				<option value="Examination" <?php echo isset($point_type) ?>>Examination</option>
				<option value="Follow-up" <?php echo isset($point_type) ?>>Follow-up</option>
				<option value="X-ray" <?php echo isset($point_type) ?>>X-ray</option>
				<option value="E3 - Endo One Canal" <?php echo isset($point_type) ?>>E3 - Endo One Canal</option>
				<option value="E6 - Endo Two Canals" <?php echo isset($point_type) ?>>E6 - Endo Two Canals</option>
				<option value="E7 - Endo Three Canals" <?php echo isset($point_type) ?>>E7 - Endo Three Canals</option>
				<option value="E8 - Endo Four Canals" <?php echo isset($point_type) ?>>E8 - Endo Four Canals</option>
				<option value="E1 - Pulpotec" <?php echo isset($point_type) ?>>E1 - Pulpotec</option>
				<option value="E5 - Re-endo Four Canals" <?php echo isset($point_type) ?>>E5 - Re-endo Four Canals</option>
				<option value="E2 - Re-endo One Canal" <?php echo isset($point_type) ?>>E2 - Re-endo One Canal</option>
				<option value="E9 - Re-endo Three Canals" <?php echo isset($point_type) ?>>E9 - Re-endo Three Canals</option>
				<option value="E4 - Re-endo Two Canal" <?php echo isset($point_type) ?>>E4 - Re-endo Two Canal</option>
				<option value="E 239 - Composite simple" <?php echo isset($point_type) ?>>E 239 - Composite simple</option>
				<option value="F 45 - Composite Compound" <?php echo isset($point_type) ?>>F 45 - Composite Compound</option>
				<option value="G 5 - Composite Complex" <?php echo isset($point_type) ?>>G 5 - Composite Complex</option>
				<option value="F10 - G. Ionomer Simple" <?php echo isset($point_type) ?>>F10 - G. Ionomer Simple</option>
				<option value="F11 - G. Ionomer Compound" <?php echo isset($point_type) ?>>F11 - G. Ionomer Compound</option>
				<option value="I3 - Fixture 2" <?php echo isset($point_type) ?>>I3 - Fixture 2</option>
				<option value="I6 - Gingival Former" <?php echo isset($point_type) ?>>I6 - Gingival Former</option>
				<option value="imp 21 - imp biohorizon " <?php echo isset($point_type) ?>>imp 21 - imp biohorizon </option>
				<option value="I2 - Mini Implant Abutment" <?php echo isset($point_type) ?>>I2 - Mini Implant Abutment</option>
				<option value="I1 - Mini Implant Ball & Socket" <?php echo isset($point_type) ?>>I1 - Mini Implant Ball & Socket</option>
				<option value="I4 - Screw-retained with custom abutment" <?php echo isset($point_type) ?>>I4 - Screw-retained with custom abutment</option>
				<option value="S8 - Non-resorbable Membrane" <?php echo isset($point_type) ?>>S8 - Non-resorbable Membrane</option>
				<option value="O18 - Half Phase" <?php echo isset($point_type) ?>>O18 - Half Phase</option>
				<option value="O9 - K-Line Ortho" <?php echo isset($point_type) ?>>O9 - K-Line Ortho</option>
				<option value="O7 - Metal Braces" <?php echo isset($point_type) ?>>O7 - Metal Braces</option>
				<option value="O2 - Metal Bracket" <?php echo isset($point_type) ?>>O2 - Metal Bracket</option>
				<option value="O10 - Mini Screw" <?php echo isset($point_type) ?>>O10 - Mini Screw</option>
				<option value="O1 - Ortho Evaluation" <?php echo isset($point_type) ?>>O1 - Ortho Evaluation</option>
				<option value="O5 - Ortho Follow Up" <?php echo isset($point_type) ?>>O5 - Ortho Follow Up</option>
				<option value="O15 - Retainer (Acrylic)" <?php echo isset($point_type) ?>>O15 - Retainer (Acrylic)</option>
				<option value="O14 - Retainer (Clear)" <?php echo isset($point_type) ?>>O14 - Retainer (Clear)</option>
				<option value="O4 - Screw Appliance 2D" <?php echo isset($point_type) ?>>O4 - Screw Appliance 2D</option>
				<option value="O11 - Screw Appliance 3D" <?php echo isset($point_type) ?>>O11 - Screw Appliance 3D</option>
				<option value="O17 - T4K" <?php echo isset($point_type) ?>>O17 - T4K</option>
				<option value="BPe9 - Extraction" <?php echo isset($point_type) ?>>Pe9 - Extraction</option>
				<option value="Pe4 - Class 2 filling " <?php echo isset($point_type) ?>>Pe4 - Class 2 filling</option>
				<option value="Pe1 - Class 1 filling" <?php echo isset($point_type) ?>>Pe1 - Class 1 filling</option>
				<option value="Pe6 - Pulpectomy" <?php echo isset($point_type) ?>>Pe6 - Pulpectomy</option>
				<option value="Pe5 - Pulpotomy" <?php echo isset($point_type) ?>>Pe5 - Pulpotomy</option>
				<option value="Pe8 - St.St. Crown" <?php echo isset($point_type) ?>>Pe8 - St.St. Crown</option>
				<option value="Pe2 - Primary filling" <?php echo isset($point_type) ?>>Pe2 - Primary filling</option>
				<option value="Pe3 - Space Maintainer" <?php echo isset($point_type) ?>>Pe3 - Space Maintainer</option>
				<option value="Pr4 - Impression" <?php echo isset($point_type) ?>>Pr4 - Impression</option>
				<option value="Pr9 - Flexi Denture" <?php echo isset($point_type) ?>>Pr9 - Flexi Denture</option>
				<option value="Pr1 - Night Guard" <?php echo isset($point_type) ?>>Pr1 - Night Guard</option>
				<option value="Pr8 - Over-Denture" <?php echo isset($point_type) ?>>Pr8 - Over-Denture</option>
				<option value="Pr5 - Ralining" <?php echo isset($point_type) ?>>Pr5 - Ralining</option>
				<option value="Pr6 - Rebasing" <?php echo isset($point_type) ?>>Pr6 - Rebasing</option>
				<option value="Pr3 - Stent" <?php echo isset($point_type) ?>>Pr3 - Stent</option>
				<option value="BPr2 - Study Cast" <?php echo isset($point_type) ?>>Pr2 - Study Cast</option>
				<option value="S12 - Surgical Extraction" <?php echo isset($point_type) ?>>S12 - Surgical Extraction</option>
				<option value="S1 - surgical extraction remaining root" <?php echo isset($point_type) ?>>S1 - surgical extraction remaining root</option>
				<option value="S15 - Suture Removal" <?php echo isset($point_type) ?>>S15 - Suture Removal</option>
				<option value="S11 - Simple Extraction" <?php echo isset($point_type) ?>>S11 - Simple Extraction</option>
				<option value="S14 - Sinus lifting " <?php echo isset($point_type) ?>>S14 - Sinus lifting </option>
				<option value="S17 - Soft / Hard Tissue Surgery 2" <?php echo isset($point_type) ?>>S17 - Soft / Hard Tissue Surgery 2</option>
				<option value="S10 - Moderate Extraction" <?php echo isset($point_type) ?>>S10 - Moderate Extraction</option>
				<option value="S2 - impacted canine" <?php echo isset($point_type) ?>>S2 - impacted canine</option>
				<option value="S3 - moderat extraction " <?php echo isset($point_type) ?>>S3 - moderat extraction </option>
				<option value="S5 - Resorbable Membrane" <?php echo isset($point_type) ?>>S5 - Resorbable Membrane</option>
				<option value="S7 - Ridge Splitting" <?php echo isset($point_type) ?>>S7 - Ridge Splitting</option>
				<option value="S9 - Difficult Extraction" <?php echo isset($point_type) ?>>S9 - Difficult Extraction</option>
				<option value="bone grafting" <?php echo isset($point_type) ?>>bone grafting</option>
				<option value="soft tissue grafting" <?php echo isset($point_type) ?>>soft tissue grafting</option>
				<option value="membrane grafting" <?php echo isset($point_type) ?>>membrane grafting</option>
				<option value="scaling and polishing" <?php echo isset($point_type) ?>>scaling and polishing</option>

			</select>
		</div>
		<div class="form-group">
		<img src="assets/uploads/teeth1.jpg" width="600px">
	</div>
	<div class="form-group">
		<img src="assets/uploads/c1.jpg" width="600px">
	</div>
	<div class="form-group">
		<img src="assets/uploads/c2.jpg" width="600px">
	</div>
	<div class="form-group">
		<img src="assets/uploads/c3.jpg" width="600px">
	</div>
		<div class="form-group">
			<label for="">Description</label>
			<textarea name="description" id="" cols="10" rows="1" class="summernote form-control">
				<?php echo isset($description) ? $description : '' ?>
			</textarea>
		</div>
		<div class="form-group">
			<label for="">Status</label>
			<select name="status" id="status" class="custom-select custom-select-sm">
				<option value="1" <?php echo isset($status) && $status == 1 ? 'selected' : '' ?>>Pending</option>
				<option value="2" <?php echo isset($status) && $status == 2 ? 'selected' : '' ?>>On-Progress</option>
				<option value="3" <?php echo isset($status) && $status == 3 ? 'selected' : '' ?>>Done</option>
			</select>
		</div>
	</form>
</div>

<script>
	$(document).ready(function(){


	$('.summernote').summernote({
        height: 200,
        toolbar: [
            [ 'style', [ 'style' ] ],
            [ 'font', [ 'bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear'] ],
            [ 'fontname', [ 'fontname' ] ],
            [ 'fontsize', [ 'fontsize' ] ],
            [ 'color', [ 'color' ] ],
            [ 'para', [ 'ol', 'ul', 'paragraph', 'height' ] ],
            [ 'table', [ 'table' ] ],
            [ 'view', [ 'undo', 'redo', 'fullscreen', 'codeview', 'help' ] ]
        ]
    })
     })
    
    $('#manage-task').submit(function(e){
    	e.preventDefault()
    	start_load()
    	$.ajax({
    		url:'ajax.php?action=save_task',
			data: new FormData($(this)[0]),
		    cache: false,
		    contentType: false,
		    processData: false,
		    method: 'POST',
		    type: 'POST',
			success:function(resp){
				if(resp == 1){
					alert_toast('Data successfully saved',"success");
					setTimeout(function(){
						location.reload()
					},1500)
				}
			}
    	})
    })
</script>