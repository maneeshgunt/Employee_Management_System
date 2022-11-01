import React from 'react'
import {
  CButton,
  CCard,
  CCardBody,
  CCardHeader,
  CCol,
  CForm,
  CFormInput,
  CFormLabel,
  CFormTextarea,
  CRow,
} from '@coreui/react'
import { DocsCallout, DocsExample } from '../../../components'

const FormControl = () => {
  return (
    <CRow>
  <CCardBody>
     
           <div class="row">
            <div class="col-6">
              <br />
              <CFormLabel htmlFor="examp">Product Name</CFormLabel>
              <CFormInput
              id="examp"
                type="text"
                placeholder="Name"
                aria-label="default input example"
              />
            
           
              </div>
              <div class="col-6">
              <br />
              <CFormLabel htmlFor="addr">Product Category</CFormLabel>
              <CFormInput
              id="addr"
                type="text"
                placeholder="Category"
                aria-label="default input example"
              />
            
           
              </div>
        </div>

        <div class="row">
            <div class="col-6">
              <br />
              <CFormLabel htmlFor="Date">Product Image</CFormLabel>
              <CFormInput
              id="examp"
                type="file"
                placeholder="Name"
                aria-label="default input example"
              />
            
           
              </div>
              <div class="col-6">
              <br />
              <CFormLabel htmlFor="Quantity">Product Amount</CFormLabel>
              <CFormInput
              id="Quantity"
                type="text"
                placeholder="Amount"
                aria-label="default input example"
              />
            
           
              </div>
        </div>

        <div class="row">
            <div class="col-6">
              <br />
        
              <CButton type="submit" className="mb-3">
                   Submit
                  </CButton>
            
           
              </div>
        
        </div>
          </CCardBody>


    </CRow>
  )
}

export default FormControl
