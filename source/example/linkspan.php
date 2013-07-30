<?php
	require('../../../../includes/configuration/prepend.inc.php');

	class ExampleForm extends QForm {
		
		protected $btnSave;
		protected $btnCancel;
		protected $btnDelete;
		protected $btnDelete0;
		protected $btnMessage;
		protected $btnCreate;
		protected $btnDuplicate;
		protected $btnIcons;
		
		protected $btnCreate_Group;
		protected $btnSave_Group;
		protected $btnDuplicate_Group;
		protected $btnDelete_Group;
		
		protected $btnList_Two;
		protected $btnIcons_Two;
		
		protected function Form_Create() {
			
			$this->btnSave = new QLinkSpan($this);
			$this->btnSave->Text = QApplication::Translate('Save');
			$this->btnSave->AddCssClass("button");
			$this->btnSave->SpanText ="button-icon green-gradient glossy";
			$this->btnSave->SecondSpanText ="icon-download";
			
			
			$this->btnCancel = new QLinkSpan($this);
			$this->btnCancel->Text = QApplication::Translate('Cancel');
			$this->btnCancel->AddCssClass(" button"); 
			$this->btnCancel->SpanText ="button-icon orange-gradient";
			$this->btnCancel->SecondSpanText ="icon-cross";
			$this->btnCancel->PlaceSpan = QPlaceSpan::Left; 
			
			$this->btnDelete = new QLinkSpan($this);
			$this->btnDelete->Text = QApplication::Translate('Delete');
			$this->btnDelete->AddCssClass("button");
			$this->btnDelete->SpanText ="button-icon red-gradient glossy";
			$this->btnDelete->SecondSpanText ="icon-trash";
			$this->btnDelete->PlaceSpan = QPlaceSpan::Left;
			
			$this->btnDelete0 = new QLinkSpan($this);
			$this->btnDelete0->Text = QApplication::Translate('Delete');
			$this->btnDelete0->AddCssClass(" button grey-gradient disabled"); // button
			$this->btnDelete0->SpanText ="button-icon red-gradient right-side";
			$this->btnDelete0->SecondSpanText ="icon-trash";
			$this->btnDelete0->PlaceSpan = QPlaceSpan::Right;
			
			$this->btnCreate = new QLinkSpan($this);
			$this->btnCreate->Text = QApplication::Translate('Create');
			$this->btnCreate->AddCssClass("button");
			$this->btnCreate->SpanText ="button-icon anthracite-gradient glossy right-side";
			$this->btnCreate->SecondSpanText ="icon-star";
			$this->btnCreate->PlaceSpan = QPlaceSpan::Right;
			
			$this->btnDuplicate = new QLinkSpan($this);
			$this->btnDuplicate->Text = QApplication::Translate('Duplicate');
			$this->btnDuplicate->AddCssClass("button icon-new-tab orange-active");
			
			$this->btnMessage = new QLinkSpan($this);
			$this->btnMessage->Text = QApplication::Translate('New Messages');
			$this->btnMessage->AddCssClass("button green-active");
			$this->btnMessage->SpanText ="button-icon";
			$this->btnMessage->SubText ="25";
			
			$this->btnIcons = new QLinkSpan($this);
			$this->btnIcons->Text = QApplication::Translate('Icons');
			$this->btnIcons->AddCssClass("button icon-thumbs green-active");
			
			$this->btnCreate_Group = new QLinkSpan($this);
			$this->btnCreate_Group->Text = QApplication::Translate('Create');
			$this->btnCreate_Group->AddCssClass('button');
			$this->btnCreate_Group->SpanText ='icon-star';
			
			$this->btnSave_Group = new QLinkSpan($this);
			$this->btnSave_Group->Text = QApplication::Translate('Save');
			$this->btnSave_Group->AddCssClass('button');
			$this->btnSave_Group->SpanText ='icon-download';
			
			$this->btnDuplicate_Group = new QLinkSpan($this);
			$this->btnDuplicate_Group->Text = QApplication::Translate('Duplicate');
			$this->btnDuplicate_Group->AddCssClass('button');
			$this->btnDuplicate_Group->SpanText ='icon-new-tab';
			
			$this->btnDelete_Group = new QLinkSpan($this);
			$this->btnDelete_Group->Text = QApplication::Translate('Delete');
			$this->btnDelete_Group->AddCssClass('button');
			$this->btnDelete_Group->SpanText ='icon-trash';
			
			$this->btnList_Two = new QLinkSpan($this);
			$this->btnList_Two->Text = QApplication::Translate('List');
			$this->btnList_Two->AddCssClass('button green-active'); //button green-active active
			$this->btnList_Two->SpanText ='icon-list';
			$this->btnList_Two->SecondSpanText='';
			
			$this->btnIcons_Two = new QLinkSpan($this);
			$this->btnIcons_Two->Text = QApplication::Translate('Icons');
			$this->btnIcons_Two->AddCssClass('button green-active');
			$this->btnIcons_Two->SpanText ='icon-thumbs';
									
		}
	}

	ExampleForm::Run('ExampleForm');
?>
