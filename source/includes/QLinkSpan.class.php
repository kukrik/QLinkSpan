<?php
	// This class will add an HTML link to <a href> <span> or <span> <span>, but works like a Button or ImageButton.
	// (This is a subclass of Action Control)
	// So you can not define the "URL / HREF" Button Link to this destination. He simply binds
	// To "#". And then when ClientAction is defined, then fill it clicked. If the Server Action
	// Is specified, the execution and perform the postback when clicked.
	// "Text" is a text link.
	// "SpanText" is referred to the background icon or text
	// "SecondSpanText" is referred to the background icon or text.
	// "SubText" is only the number or text (string).

	
	abstract class QPlaceSpan {
		const NotSet = 'NotSet';
		const Left = 'Left';
		const Right = 'Right';
	}

	class QLinkSpan extends QActionControl {
		///////////////////////////
		// Private Member Variables
		///////////////////////////

		// APPEARANCE
		protected $strText = null;
		protected $blnHtmlEntities = true;

		protected $strLinkUrl = '#';
		protected $strSpanText = null; // Background or icon referred to the text
		protected $strSecondSpanText = null; //Background or icon referred to the text
		protected $strSubText = null; //  Only text or number (string)
		
		
		// LAYOUT
		protected $strPlaceSpan = null;

		//////////
		// Methods
		//////////
		
		public function __construct($objParentObject, $strControlId = null) {
			parent::__construct($objParentObject, $strControlId);
			
			$this->AddPluginCssFile("QLinkSpan", "colors.css?v=1");
			$this->AddPluginCssFile("QLinkSpan", "style.css?v=1");
			$this->AddPluginCssFile("QLinkSpan", "reset.css?v=1");
		}
		
		protected function GetControlHtml() {
			
			$strStyle = $this->GetStyleAttributes();
			if ($strStyle)
				$strStyle = sprintf('style="%s"', $strStyle);
				
			switch ($this->strPlaceSpan) {
				case QPlaceSpan::Left:
					if($this->strSpanText) 
						$strToReturn = sprintf('<a href="%s" id="%s" %s%s><span class="%s">%s</span></a>',
							$this->strLinkUrl,
							$this->strControlId,
							$this->GetAttributes(),		
							$strStyle,
							$this->strSpanText,
							($this->blnHtmlEntities) ? QApplication::HtmlEntities($this->strText) : $this->strText); 
					if($this->strSpanText && $this->strSubText) 
						$strToReturn .= sprintf('<a href="%s" id="%s" %s%s><span class="%s">%s</span>%s</a>',
							$this->strLinkUrl,
							$this->strControlId,
							$this->GetAttributes(),		
							$strStyle,
							$this->strSpanText,
							QApplication::HtmlEntities($this->strSubText),
							($this->blnHtmlEntities) ? QApplication::HtmlEntities($this->strText) : $this->strText);
					if($this->strSpanText && $this->strSecondSpanText) 
						$strToReturn = sprintf('<a href="%s" id="%s" %s%s><span class="%s"><span class="%s"></span></span>%s</a>',
							$this->strLinkUrl,
							$this->strControlId,
							$this->GetAttributes(),		
							$strStyle,
							$this->strSpanText,
							$this->strSecondSpanText,
							($this->blnHtmlEntities) ? QApplication::HtmlEntities($this->strText) : $this->strText);
					break;
				case QPlaceSpan::Right:
					if($this->strSpanText) 
						$strToReturn = sprintf('<a href="%s" id="%s" %s%s>%s<span class="%s"></span></a>',
							$this->strLinkUrl,
							$this->strControlId,
							$this->GetAttributes(),		
							$strStyle,
							($this->blnHtmlEntities) ? QApplication::HtmlEntities($this->strText) : $this->strText,
							$this->strSpanText);
					if($this->strSpanText && $this->strSubText) 
						$strToReturn = sprintf('<a href="%s" id="%s" %s%s>%s<span class="%s">%s</span></a>',
							$this->strLinkUrl,
							$this->strControlId,
							$this->GetAttributes(),		
							$strStyle,
							($this->blnHtmlEntities) ? QApplication::HtmlEntities($this->strText) : $this->strText,
							$this->strSpanText,
							QApplication::HtmlEntities($this->strSubText));
					if($this->strSpanText && $this->strSecondSpanText) 
						$strToReturn = sprintf('<a href="%s" id="%s" %s%s>%s<span class="%s"><span class="%s"></span></span></a>',
							$this->strLinkUrl,
							$this->strControlId,
							$this->GetAttributes(),		
							$strStyle,
							($this->blnHtmlEntities) ? QApplication::HtmlEntities($this->strText) : $this->strText,
							$this->strSpanText,
							$this->strSecondSpanText);
					break;
					default: // The same effect as a direction, but not written to Place = QPlaceSpan::Left
						if($this->strText) // The same effect = QLinkButton
							$strToReturn = sprintf('<a href="%s" id="%s" %s%s>%s</a>', 
							$this->strLinkUrl,
							$this->strControlId,
							$this->GetAttributes(),		
							$strStyle,
							($this->blnHtmlEntities) ? QApplication::HtmlEntities($this->strText) : $this->strText);
					if($this->strSpanText) 
						$strToReturn = sprintf('<a href="%s" id="%s" %s%s><span class="%s">%s</span></a>',
							$this->strLinkUrl,
							$this->strControlId,
							$this->GetAttributes(),		
							$strStyle,
							$this->strSpanText,
							($this->blnHtmlEntities) ? QApplication::HtmlEntities($this->strText) : $this->strText);
					if($this->strSpanText && $this->strSubText) 
						$strToReturn = sprintf('<a href="%s" id="%s" %s%s><span class="%s">%s</span>%s</a>',
							$this->strLinkUrl,
							$this->strControlId,
							$this->GetAttributes(),		
							$strStyle,
							$this->strSpanText,
							QApplication::HtmlEntities($this->strSubText),
							($this->blnHtmlEntities) ? QApplication::HtmlEntities($this->strText) : $this->strText);
					if($this->strSpanText && $this->strSecondSpanText)
						$strToReturn = sprintf('<a href="%s" id="%s" %s%s><span class="%s"><span class="%s"></span></span>%s</a>',
							$this->strLinkUrl,
							$this->strControlId,
							$this->GetAttributes(),		
							$strStyle,
							$this->strSpanText,
							$this->strSecondSpanText,
							($this->blnHtmlEntities) ? QApplication::HtmlEntities($this->strText) : $this->strText);
				}

				return $strToReturn;
			}			
	
		/////////////////////////
		// Public Properties: GET
		/////////////////////////
		public function __get($strName) {
			switch ($strName) {
				// APPEARANCE
				case "Text": return $this->strText;
				case "HtmlEntities": return $this->blnHtmlEntities;
				case 'LinkUrl': return $this->strLinkUrl;
				case "SpanText": return $this->strSpanText;
				case "SecondSpanText": return $this->strSecondSpanText;
				case "SubText": return $this->strSubText;
				// LAYOUT
				case 'PlaceSpan': return $this->strPlaceSpan;
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}

		/////////////////////////
		// Public Properties: SET
		/////////////////////////
		public function __set($strName, $mixValue) {
			$this->blnModified = true;

			switch ($strName) {
				// APPEARANCE
				case "Text":
					try {
						$this->strText = QType::Cast($mixValue, QType::String);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case "HtmlEntities":
					try {
						$this->blnHtmlEntities = QType::Cast($mixValue, QType::Boolean);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'LinkUrl':
					try {
						$this->strLinkUrl = QType::Cast($mixValue, QType::String);
						break;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
				
					case  "SpanText":
					try {
						$this->strSpanText = QType::Cast($mixValue, QType::String);
						break;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
					
					case  "SecondSpanText":
					try {
						$this->strSecondSpanText = QType::Cast($mixValue, QType::String);
						break;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
					
					case  "SubText":
					try {
						$this->strSubText = QType::Cast($mixValue, QType::String);
						break;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
					
					// LAYOUT
					case 'PlaceSpan':
					try {
						$strPlaceSpan = QType::Cast($mixValue, QType::String);

						if (($strPlaceSpan == QPlaceSpan::Left) ||
							($strPlaceSpan == QPlaceSpan::Right) 
						)
							return $this->strPlaceSpan = $strPlaceSpan;
						break;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				default:
					try {
						parent::__set($strName, $mixValue);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
					break;
			}
		}
	}
?>