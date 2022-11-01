import React from 'react'
import {
  CCard,
  CCardBody,
  CCardHeader,
  CCol,
  CRow,
  CTable,
  CTableBody,
  CTableCaption,
  CTableDataCell,
  CTableHead,
  CTableHeaderCell,
  CTableRow,
} from '@coreui/react'
import { DocsCallout , DocsExample} from '../../../components'
import { Link } from 'react-router-dom'

const Tables = () => {
  return (
    <CRow>
     
      <CCol xs={12}>
        <CCard className="mb-4">
         
          <CCardBody>
          <Link to="/forms/form-control">   <button component="input" type="button" class="btn-primary" value="Input" >Add Product</button></Link>
            <DocsExample href="components/table">
              <CTable>
                <CTableHead>
                  <CTableRow>
                    <CTableHeaderCell scope="col">Id</CTableHeaderCell>
                    <CTableHeaderCell scope="col">Name</CTableHeaderCell>
                    <CTableHeaderCell scope="col">Category</CTableHeaderCell>
                    <CTableHeaderCell scope="col">Image</CTableHeaderCell>
                    <CTableHeaderCell scope="col">Amount</CTableHeaderCell>
                    <CTableHeaderCell scope="col">Action</CTableHeaderCell>
                  </CTableRow>
                </CTableHead>
                <CTableBody>
                  <CTableRow>
                    <CTableHeaderCell scope="row">1</CTableHeaderCell>
                    <CTableDataCell>Apples</CTableDataCell>
                    <CTableDataCell>Fruits</CTableDataCell>
                    <CTableDataCell><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSngCk7ZCcauRgRtf8WEGoXXx8ec6WiTz02rQ&usqp=CAU " height="30px" width="30px"/></CTableDataCell>
                    <CTableDataCell>Rs 200</CTableDataCell>
                    <CTableDataCell> 
                    <Link to="/forms/form-control">         <button component="input" type="button" class="btn-primary" value="Input" >Edit </button></Link>&nbsp;&nbsp;
                    <button component="input" type="button" class="btn-danger" value="Input" >Delet</button>
            </CTableDataCell>
                 
                  </CTableRow>
                
                 
                </CTableBody>
              </CTable>
            </DocsExample>
          </CCardBody>
        </CCard>
      </CCol>
     
     
    </CRow>
  )
}

export default Tables
